<?php
/*
Author : AkhilHector
PHP : 5.6a
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


send_admin($myemail);  // notification for the admin
send_user($email);  // includes the unique code also 


function send_admin($mail) {

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

mail($mail, $subject, $message);
}

function send_user($mail) {

	$subject = "TEDxGITAMUniversity Registration Code";

	$message = " Below mentioned is a unique
	code which confirms the process of registration, 
	so please message the Unique Code to the 
	mail tedxgitamuniversity@gmail.com.


	The unique code is $unique

	";

	mail($mail,$subject,$message);
}



// Update the Datbase after each Successfull Registration

$query = "INSERT INTO register (name,id,number,email,collorg,prev,favtalk) VALUES (:name,:id,:number:,:email,:collorg,:prev,:favtalk)";
$mysql = $Db=>prepare($query);
$mysql = execute(array(':name'=>$name,':id'=>$id,':number'=>$number,':email'=>$email,':collorg'=>$collorg,':prev'=>$prev,':favtalk'=>$favtalk));

exit();
?>

