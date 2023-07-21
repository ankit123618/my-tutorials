<?php

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$password=$_POST['password'];

$connection = mysqli_connect("localhost","root","","form");

// var_dump($connection);
// echo $connection;

$insert = "INSERT INTO `new_form` ( `fname`, `lname`, `password`) VALUES ('$fname', '$lname','$password')";
$status = mysqli_query($connection, $insert);
if($status==1)
echo "data successful";
else
echo "data not insert"; 
?>


