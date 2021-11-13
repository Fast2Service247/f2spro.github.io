<?php
ini_set('display_errors',1);
error_reporting(E_ALL);

if (isset($_POST['submit'])) { 
$email=$_POST['email'];

$from = "info@fast2service.com";
$to = $email;

$subject = "fast2service";
$message = "join user";
$headers = "From:" . $from;

mail($to,$subject,$message,$headers);

echo '<script> 
alert("The email message was sucssfully send");
window.location="index.php";
</script>';
}
?>