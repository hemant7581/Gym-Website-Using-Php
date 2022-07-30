<!-- <?php
    // $server = "localhost";
    // $name = "root";
    // $password = "";
    // $database = "users";

    // //creating  datatbase connection
    // $con = mysqli_connect($server, $username, $password, $database );

    // //check for connection success
    // if(!$con)
    // {echo "Success connecting to the db";}
?> -->
<?php
$con = mysqli_connect('localhost','root');

if (!$con) {
    // echo "connection successful";
// }else {
    die("Error". mysqli_connect_error());
}
mysqli_select_db($con,'users_info');

$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$message = $_POST['message'];

 $query= "insert into users_contact( name, email, mobile, message)
 values ('$name','$email','$mobile','$message')";

 //fire the query
 mysqli_query($con,$query );


 echo ("<P>Your Form Has been Submitted...
 

 </p>");


 
 
 
 
 ?>
