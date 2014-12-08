<?php 


$db_host= "localhost";
$db_name="ghost";
$db_user= "root";
$db_pwd= "akhil";

$connection = mysql_connect($db_host,$db_user,$db_pwd) or die("Error connecting to MYSQL: " . mysql_error());
$database = mysql_select_db($db_name,$connection) or die("Error connecting to MYSQL: " . mysql_error());


 $myemail = "akhilhector.1@gmail.com";




$subject = "$name registered ";

$message = "
	$name has been registered using with id $id and 
	belongs to the college/organization $collorg. The
	contact number of $name is $number

Email : $email

On a previous TED talk user reoprted
$prev

$name's favorite TED talk is 
$prev

";

mail($myemail, $subject, $message);


function send($data, $problem='')
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

$userid = $_POST['id'];
$username = $_POST['name'];
$temp = "TEDxGU";
$store = "$temp$name";
$adminmail = "akhilhector.1@gmail.com";

confirm_code(); // sends the unique code to user and admin

function confirm_code()
{
  $usermail = $_POST['email'];
  $len = strlen($userid);
  if($len >= 10) // in case the id is greater than 10 digits
 {
	$trim = substr("$userid",5,10);
	$code = "$store$trim";
	$message = " Thank you
	for registering with us in order to 
	confirm the registration please give
        this code $code to the respective team,
	identifying your completion of registration.
";
	$msg= "The user with $username and with the email address
		$usermail has the unique code $code";

 }
  else if($len >=5 && $len < 10) //if the id is between 5 & 10 digits
{
 	$trim = substr("$userid",0,5);
	$code = "$store$trim";
	$message = " Thank you
	for registering with us in order to 
	confirm the registration please give
        this code $code to the respective team,
	identifying your completion of registration.
";
	$msg= "The user with $username and with the email address
		$usermail has the unique code $code";
}

  $subject = "Confirm your Registration";
  $sub = "Confirm the registration";
  
	mail($usermail,$subject,$message);	
	mail($adminmail,$sub,$msg);
}

function newregistration() 
{

$name = $_POST['name'];   
$id = $_POST['id'];
$number = $_POST['number'];
$email = $_POST['email'];
$collorg = $_POST['collorg'];
$prev = $_POST['prev'];
$favtalk = $_POST['favtalk'];

$query = "INSERT INTO register (name,id,number,email,collorg,prev,favtalk) VALUES ('$name','$id','$number','$email','$collorg','$prev','$favtalk')";



$data = mysql_query($query) or die(mysql_error());

    if($data) {
        echo "Row inserted ";
    }
}

function update()
{
    if(!empty($_POST['email']))
    {
        $query = mysql_query("SELECT * FROM register WHERE id = '$_POST[id]' AND email = '$_POST[email]' ") or die(mysql_error());
        if (!$row = mysql_fetch_array($query) or die(mysql_error())) {
            newregistration();
        }

        else 
        {
            echo "You have already been registered";
        }
    }
}    

if(isset($_POST['submit'])) {
        update();
    }


?>

 

                            
                            
                            
                            
                            
                            
                            
                            
