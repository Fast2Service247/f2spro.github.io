<?php 
include('config.php');


require_once "controllerUserData.php"; 
 
 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }
}else{
    header('Location: login-user.php');
}
 
 
 
$email=$_SESSION['$u_mobile_number'];
include('config.php');
$qry="select * from user where u_email='".$u_mobile_number."'";
                    $res=mysqli_query($conn, $qry);
                     while($row=mysqli_fetch_array($res))
                     {
                             
                                $u_name=$row["u_name"];
                                $u_email=$row['u_email'];
                                $u_mobile_number=$row['u_mobile_number'];
                                $u_image=$row['u_image'];
					 }
 
 
   
?> 