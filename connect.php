
<?php

$server = 'localhost';
$username = 'root';
$password = '';
$dbName = 'contact';

$conn = mysqli_connect($server,$username,$password,$dbName);
if($conn){
echo "connection suucessful";
} else{
    echo "error";
}

?>