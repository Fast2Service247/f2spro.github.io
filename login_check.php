<?php
session_start();
include('config.php');

$name=$_POST['name'];
$email=$_POST['email'];
$user_id=$_POST['user_id'];
$image=$_POST['image'];

$_SESSION['USER_ID']=$user_id;
        

$res=mysqli_query($conn,"select * from google_login where user_id='$user_id'");
$check=mysqli_num_rows($res);
        $row=mysqli_fetch_assoc($res);
        $_SESSION['NAME']=$row['name'];
        
if($check>0){

}else{
        mysqli_query($conn,"insert into google_login(name,email,image,user_id) values('".$name."','".$email."','".$image."','".$user_id."')");
        $_SESSION['NAME']=$name;
}

header("Location:user_index.php");

?>