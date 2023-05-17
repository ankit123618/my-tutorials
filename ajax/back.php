<?php
if($_REQUEST['$_GET'])
echo "GET request of xhr";

// get the data from the POST request
$data = json_decode(file_get_contents('php://input'), true);

// access the data and use it as desired
$name = $data['name'];
$email = $data['email'];
$message = $data['message'];

// do something with the data (e.g. store it in a database)
// ...
echo $name . $email . $message;

// echo($_POST['name']);

