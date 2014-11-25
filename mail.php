<?php

$myemail = "tedx.gu@gmail.com";


$name = sanitize($_POST['name'], "Your Name");
$number = sanitize($_POST['number'], "Your Phone number");
$email = sanitize($_POST['email'], "Your E-mail Address");
$message = sanitize($_POST['message'], "Your Message");


if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
{
show_error("Invalid e-mail address");
}


$subject = "Message from $email";

$message = "

$name has sent you a message using your contact form:

Name: $name
Email: $email
From: $info
Number: $number
Subject: $subj

Message:
$message

";


mail($myemail, $subject, $message);


header('Location: http://www.tedxgitamuniversity.com');
exit();


function sanitize($data, $problem='')
{
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
if ($problem && strlen($data) == 0)
{
show_error($problem);
}
return $data;
}

function show_error($myError)
{
?>
<html>
<body>

<p>Please correct the following error:</p>
<strong><?php echo $myError; ?></strong>
<p>Hit the back button and try again</p>

</body>
</html>
<?php
exit();
}
?>
