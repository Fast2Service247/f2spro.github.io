<?php 
include('config.php');


//  add service 
if (isset($_POST['service_submit'])) { 
    
$amount=$_POST['service_amount'];    
$offered=$_POST['service_offered']; 
$off=$amount*$offered; 
$offa=$off/100;  
$discount_amount=$amount-$offa;   
    
    
$title=$_POST['title'];
$p_name=$_POST['p_name'];
$p_email=$_POST['p_email'];
$p_mobile_number=$_POST['p_mobile_number'];
$service_amount=$_POST['service_amount'];
$service_location=$_POST['service_location'];
$category=$_POST['category'];
$sub_category=$_POST['sub_category'];
$service_offered=$_POST['service_offered'];
$descriptions=$_POST['descriptions'];

$p_image = $_FILES["p_image"]["name"]; 

// $filename = $_FILES["image"]["name"];   
// $tempname = $_FILES["image"]["tmp_name"];     
// $folder = "assets/img/".$filename; 

$filename = $_FILES['image']['name'];
         
       // Valid extension
       $valid_ext = array('png','jpeg','jpg');

			
	   $photoExt1 = @end(explode('.', $filename)); // explode the image name to get the extension
	   $phototest1 = strtolower($photoExt1);
			
	   $new_profle_pic = time().'.'.$phototest1;
			
       // Location
       $location = "assets/img/".$new_profle_pic;

       // file extension
       $file_extension = pathinfo($location, PATHINFO_EXTENSION);
       $file_extension = strtolower($file_extension);

       // Check extension
       if(in_array($file_extension,$valid_ext)){  

            // Compress Image
            compressedImage($_FILES['image']['tmp_name'],$location,60);
				
		    $sql = "insert into add_service(title,p_name,p_email,p_mobile_number,service_amount,service_location,category,sub_category,service_offered,discount_amount,descriptions,image)
values('".$title."','".$p_name."','".$p_email."','".$p_mobile_number."','".$service_amount."','".$service_location."','".$category."','".$sub_category."','".$service_offered."','".$discount_amount."','".$descriptions."','".$new_profle_pic."')"; 
mysqli_query($conn, $sql);
move_uploaded_file($tempname, $location);
 echo '<script> 
 alert("add service sucssfully");
window.location="add_service.php";
</script>';

        }
	    else
        {
                echo "File format is not correct.";
        }
    }

    // Compress image
    function compressedImage($source, $path, $quality) {

            $info = getimagesize($source);

            if ($info['mime'] == 'image/jpeg') 
                $image = imagecreatefromjpeg($source);

            elseif ($info['mime'] == 'image/gif') 
                $image = imagecreatefromgif($source);

            elseif ($info['mime'] == 'image/png') 
                $image = imagecreatefrompng($source);

            imagejpeg($image, $path, $quality);

    
          
} 


// Join as a User
if (isset($_POST['user_submit'])) { 
$u_name=$_POST['u_name'];
$u_email=$_POST['u_email'];
$u_mobile_number=$_POST['u_mobile_number'];
$u_password=$_POST['u_password'];

$sql = "insert into user(u_name,u_email,u_mobile_number,u_password) values('".$u_name."','".$u_email."','".$u_mobile_number."','".$u_password."')"; 
mysqli_query($conn, $sql);
header("Location:index.php");

  } 
   
  
  
   
//  Join as a Provider  
if (isset($_POST['provider_submit'])) { 
$p_name=$_POST['p_name'];
$p_email=$_POST['p_email'];
$p_mobile_number=$_POST['p_mobile_number'];
$p_password=$_POST['p_password'];

$sql = "insert into  providers(p_name,p_email,p_mobile_number,p_password) values('".$p_name."','".$p_email."','".$p_mobile_number."','".$p_password."')"; 
mysqli_query($conn, $sql);
header("Location:index.php");   
  }
  
  
  
  




//  Register  
if (isset($_POST['register_submit'])) { 
$name=$_POST['name'];
$mobile_number=$_POST['mobile_number'];
$email=$_POST['email'];
$password=$_POST['password'];
$confirm_password=$_POST['confirm_password'];
$address=$_POST['address'];
$country=$_POST['country'];
$state=$_POST['state'];
$city=$_POST['city'];
$pincode=$_POST['pincode'];

$sql = "insert into  register(name,mobile_number,email,password,confirm_password,address,country,state,city,pincode)
values('".$name."','".$mobile_number."','".$email."','".$password."','".$confirm_password."','".$address."','".$country."','".$state."','".$city."','".$pincode."')"; 
mysqli_query($conn, $sql);
header("Location:index.php");   
  }
  
  
// wallet_submit  
if (isset($_POST['wallet_submit'])) { 
    $wallet_amount=$_POST['wallet_amount'];
    $sql = "insert into  wallet(wallet_amount)values('".$wallet_amount."')";
    mysqli_query($conn, $sql);
    header("Location:user_wallet.php");  
    }

 
 
 
 

 
   
?> 