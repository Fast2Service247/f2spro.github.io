 <?php 
session_start();
$email=$_SESSION['u_email'];
include('config.php');
 
 if (isset($_POST['profile_submit'])) { 
 $sql = "update user set u_name='".$_POST['u_name']."'
                      ,u_email='".$_POST['u_email']."'
	                  ,u_mobile_number='".$_POST['u_mobile_number']."'
	                  ,u_password='".$_POST['u_password']."'
					  ,u_address='".$_POST['u_address']."'
					  ,u_country='".$_POST['u_country']."'
				 	  , u_state='".$_POST['u_state']."'
					  ,u_city='".$_POST['u_city']."'
					  ,u_pincode='".$_POST['u_pincode']."'
					  ,u_image='".$_FILES["u_image"]["name"]."'where u_email='".$email."'";

 
 $query_run = mysqli_query($conn, $sql);
 if( $query_run)
 {
 move_uploaded_file($_FILES["u_image"]["tmp_name"],"assets/upload_img/".$_FILES["u_image"]["name"]);
 header("Location:user-settings.php");
 }
 else{header("Location:user_index.php"); }
 } 
 
 $p_email=$_SESSION['p_email'];
  if (isset($_POST['provider_profile'])) { 
$sql = "update providers set p_name='".$_POST['p_name']."'
                      ,p_email='".$_POST['p_email']."'
	                  ,p_mobile_number='".$_POST['p_mobile_number']."'
	                  ,p_password='".$_POST['p_password']."'
					  ,p_address='".$_POST['p_address']."'
					  ,p_country='".$_POST['p_country']."'
				 	  ,p_state='".$_POST['p_state']."'
					  ,p_city='".$_POST['p_city']."'
					  ,p_pincode='".$_POST['p_pincode']."'
					  ,p_image='".$_FILES["p_image"]["name"]."'where p_email='".$p_email."'";

 
 mysqli_query($conn, $sql);

 move_uploaded_file($_FILES["p_image"]["tmp_name"],"assets/upload_img/".$_FILES["p_image"]["name"]);
 header("Location:provider_settings.php");

 } 



 if (isset($_POST['user_account'])) { 
$u_name=$_POST['u_name'];
$u_email=$_POST['u_email'];
$u_mobile_number=$_POST['u_mobile_number'];
$u_password=$_POST['u_password'];
$u_address=$_POST['u_address'];
$u_country=$_POST['u_country'];
$u_state=$_POST['u_state'];
$u_city=$_POST['u_city'];
$u_pincode=$_POST['u_pincode'];

 
$sql = "insert into user(u_name,u_email,u_mobile_number,u_password) values('".$u_name."','".$u_email."','".$u_mobile_number."','".$u_password."','".$u_address."','".$u_country."','".$u_state."','".$u_city."','".$u_pincode."')"; 
mysqli_query($conn, $sql);
header("Location:book_service.php");   
  } 

?>