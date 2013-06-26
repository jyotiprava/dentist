<?php
header('Content-type: application/javascript');
echo $_GET['jsoncallback'];

$name=$_GET['name'];
$fname=$_GET['fname'];
$address=$_GET['address'];
$zipcode=$_GET['zipcode'];
$city=$_GET['city'];
$phone=$_GET['phone'];
$email=$_GET['email'];
$message1=$_GET['message'];


$to="jps.1391@gmail.com";



$subject="New Enquiry";

// From

$header=$email;

// Your message

$message="$name\r\n$fname\r\n$address\r\n$zipcode\r\n$city\r\n$phone\r\n$email\r\n$message1";

$sentmail = mail($to,$subject,$message,$header);
if($sentmail)

	{

?>
({
		
		
		"items":"1"
		
})

<?php																
}
else
{
?>

({
		
		
		"items":"0"
	
})
<?php
}
?>

