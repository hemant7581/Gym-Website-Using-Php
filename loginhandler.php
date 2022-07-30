<?php

$showError = "false";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'db.php';
    $user_name = $_POST['loginname'];
    $pass = $_POST['loginPass'];


    // Check whether this email exists
    $Sql = "select * from `users_credentials` where user_name = '$user_name'";
    $result = mysqli_query($con, $Sql);
    $numRows = mysqli_num_rows($result);
    if($numRows==1){
        $row = mysqli_fetch_assoc($result);
                if(password_verify($pass, $numRows['loginpass'])){
                    session_start();
                    $_SESSION['loggedin'] = true;
                    $_SESSION['user_name'] = $user_name;
         
                }
            header("Location: /project/index.php");
        }
        header("Location: /project/index.php");
    }


?>