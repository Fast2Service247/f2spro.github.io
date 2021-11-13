<?php
session_start();
if(isset($_SESSION['u_email'])){
header("Location:book-service.php?id=<?php echo $id; ?>"); 
}
else
{
header("Location:user_account.php"); 
}
?>

