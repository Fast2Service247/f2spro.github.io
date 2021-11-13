<?php 
include('config.php');
session_start();
if($_SESSION['id']=="")
{

 echo '<script> 
 window.location="index.php";
 </script>';
}

$p_email=$_SESSION['p_email'];
$qry="select * from providers where p_email='".$p_email."'";
                    $res=mysqli_query($conn, $qry);
                     while($row=mysqli_fetch_array($res))
                     {
                                $p_name=$row["p_name"];
                                $p_email=$row['p_email'];
                                $p_mobile_number=$row['p_mobile_number'];
                                $p_password=$row['p_password'];
                                $p_address=$row['p_address'];
                                $p_country=$row['p_country'];
								$p_state=$row['p_state'];
                                $p_city=$row['p_city'];
                                $p_pincode=$row['p_pincode'];
                                $p_image=$row['p_image'];
                     }
					 

?>