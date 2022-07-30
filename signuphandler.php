<?php
$showError = "false";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'db.php';
    $user_name = $_POST['signupname'];
    $pass = $_POST['signupPassword'];
    $cpass = $_POST['signupcPassword'];

    // Check whether this email exists
    $existSql = "select * from `users_credentials` where user_name = '$user_name'";
    $result = mysqli_query($con, $existSql);
    $numRows = mysqli_num_rows($result);
    if($numRows>0){
        $showError = "username already in use";
    }
    else{
        if($pass == $cpass){
            // $hash = password_hash($pass, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `users_credentials` (`user_name`, `user_pass`, `timestamp`) VALUES ( '$user_name', '$pass', current_timestamp())";
            $result = mysqli_query($con, $sql);
            
            if($result){
                $showAlert = true;
                header("Location: /project/index.php?signupsuccess=true");
                exit();
            }

        }
        else{
            $showError = "Passwords do not match"; 
            
            header("Location: /project/index.php?signupsuccess=false&error=$showError");
        }
    }

}
?>