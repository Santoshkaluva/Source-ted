<?php
/*
Author : AkhilHector
PHP : 5.6
*/
session_start();

// Store the errors in a array
 $notify = array();
 $response = false; // Update ar each stage if it is set to true

// Init the Database with the credentials along with the database name

$Serv = "localhost";
$Db = "iamveerc_TedRegister";
$usr = "iamveerc_akhil";
$pwd = "akhil123!@#";

$mymail = "contact@tedxgitamuniversity.com";

// Establish a connection with the remote database with PHP Data Objects

$sync = new PDO("mysql:host= $Serv; dbname= $Db",$usr,$pwd);

function send($field) {
	
	$field = trim($field);
	$field = stripcslashes($field);
	$field = htmlspecialchars($field);

	return $field;
}

$name = send($_POST['name']);   
$id = send($_POST['id']);
$number = send($_POST['number']);
$email = send($_POST['email']);
$collorg = send($_POST['collorg']);
$prev = send($_POST['prev']);
$favtalk = send($_POST['favtalk']);
$opinion = send($_POST['opinion']);

$subject = "$name registered ";

$message = "
	$name has been registered using with id $id and 
	belongs to the college/organization $collorg. The
	contact number of $name is $number


On a previous TED talk user reoprted
$prev

$name's favorite TED talk is 
$prev

$name opinion towards the TEDx community is:
$opinion

";

mail($mymail, $subject, $message);

// Update the Datbase after each Successfull Registration


// After the Session has ended then redirect to the response page
header('Location: response.php');
exit();
?>
