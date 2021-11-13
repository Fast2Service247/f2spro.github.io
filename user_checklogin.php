<?php
session_start(); 
include('config.php');

$u_email=$_POST['u_email'];
$u_password=$_POST['u_password'];
if(isset($_POST['submit']))
{
$qry="select * from user where u_email='".$u_email."' and u_password='".$u_password."'";
$res=mysqli_query($conn,$qry);
$res1=mysqli_fetch_array($res);

   if($res1!="")
   {
    $_SESSION['u_email']=$res1['u_email'];
    $_SESSION['id']=$res1['id'];
    echo '<script>window.location="user_index.php";</script>';
    }
    else 
  	{
    echo '<script>window.location="index.php";</script>';
    }
}


$p_email=$_POST['p_email'];
$p_password=$_POST['p_password'];
if(isset($_POST['providers_login']))
{
$qry="select * from providers where p_email='".$p_email."' and p_password='".$p_password."'";
$res=mysqli_query($conn,$qry);
$res1=mysqli_fetch_array($res);

   if($res1!="")
   {
    $_SESSION['p_email']=$res1['p_email'];
    $_SESSION['id']=$res1['id'];
    echo '<script>window.location="provider_dashboard.php";</script>';
    }
    else 
  	{
    echo '<script>window.location="index.php";</script>';
    }
}
?>