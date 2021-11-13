<?php include('session.php'); 

if (isset($_POST['booking'])) {
$date=$_POST['date'];
$provider="rterte";
$provider_img="eteye.jpg";
$status="pading";	
$updated=$_POST['time_slot'];

$email=$_SESSION['u_email'];
$qry="select * from user where u_email='".$email."'";
                    $res=mysqli_query($conn, $qry);
                     while($row=mysqli_fetch_array($res))
                     {
                             
                                $user=$row["u_name"];
        //                         $u_email=$row['u_email'];
        //                         $u_mobile_number=$row['u_mobile_number'];
        //                         $u_password=$row['u_password'];
        //                         $u_address=$row['u_address'];
        //                         $u_country=$row['u_country'];
								// $u_state=$row['u_state'];
        //                         $u_city=$row['u_city'];
        //                         $u_pincode=$row['u_pincode'];
                                $user_img=$row['u_image'];
					 }



$id=$_GET['id'];
$qry="select * from add_service where id='".$id."'";
                                $res=mysqli_query($conn, $qry);
                                while($row=mysqli_fetch_array($res))
                                {
                                $service=$row['title'];
                                $amount=$row['service_amount'];
                                $location=$row['service_location'];
        //                         $category=$row['category'];
        //                         $sub_category=$row['sub_category'];
        //                         $service_offered=$row['service_offered'];
								// $descriptions=$row['descriptions'];
        //                         $image=$row['image'];
								}
								
								
$filename = $_FILES["user_img"]["name"]; 
$tempname = $_FILES["user_img"]["tmp_name"];     
$folder = "assets/upload_img/".$filename;	


$sql = "insert into book_service(date,user,user_img,provider,provider_img,service,location,amount,status,updated)
values('".$date."','".$user."','".$user_img."','".$provider."','".$provider_img."','".$service."','".$location."','".$amount."',
'".$status."','".$updated."')";
 
mysqli_query($conn, $sql);
move_uploaded_file($tempname, $folder);
header("Location: user-index.php");
}							
?>