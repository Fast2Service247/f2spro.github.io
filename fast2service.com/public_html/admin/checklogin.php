<?php
session_start(); 
include('../config.php');
 $username=$_POST['username'];
 $password=$_POST['password'];
if(isset($_POST['submit']))
{
$qry="select * from admin where username='".$username."' and password='".$password."'";
$res=mysqli_query($conn,$qry);
$res1=mysqli_fetch_array($res);

   if($res1!="")
   {
    $_SESSION['username']=$res1['username'];
    $_SESSION['id']=$res1['id'];

    echo '<script> 
 alert("admin Login  sucssfully");
window.location="dashboard.php";
</script>';

   }
  else 
  	{
    echo '<script> 
 alert("admin Login unsucssfully");
 window.location="index.php";
</script>';

   }




}



?>