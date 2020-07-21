<?php

include 'connect.php';


$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$sql = "INSERT INTO `contact-data` (`name`,`email`,`subject`,`message`) VALUES
 ('$name','$email','$subject','$message')";
   $result = mysqli_query($conn,$sql);
   if($result){
       echo "record added";
   }else{
       echo  "something wrong";
   }
?>