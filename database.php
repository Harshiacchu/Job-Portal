<?php
$server='localhost';
$username='root';
$password='harshitha';
$database='job';
$conn= mysqli_connect($server,$username,$password,$database);

if(!$conn){
    die("Error deleting record:".mysqli_error($conn));

}
?>
