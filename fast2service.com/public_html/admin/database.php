<?php
include('../config.php');

// subscription
if (isset($_POST['subscription_submit'])) { 
$subscription_name=$_POST['subscription_name'];
$subscription_amount=$_POST['subscription_amount'];
$subscription_durations=$_POST['subscription_durations'];
$subscription_status=$_POST['subscription_status'];

$sql = "insert into subscription(subscription_name,subscription_amount,subscription_durations,subscription_status)
values('".$subscription_name."','".$subscription_amount."','".$subscription_durations."','".$subscription_status."')"; 
mysqli_query($conn, $sql);
header("Location:subscriptions.php");   
}

// ratingstype
if (isset($_POST['ratingstype_submit'])) { 
$ratings_type=$_POST['ratings_type'];
$sql = "insert into ratingtype(ratings_type)values('".$ratings_type."')"; 
mysqli_query($conn, $sql);
header("Location:ratingstype.php");  
} 




 // category
if (isset($_POST['category_submit'])) { 
$category_name=$_POST['category_name'];

$filename = $_FILES["category_image"]["name"]; 
$tempname = $_FILES["category_image"]["tmp_name"];     
$folder = "images/".$filename; 
          
$sql = "insert into category(category_name,category_image)
values('".$category_name."','".$filename."')"; 
mysqli_query($conn, $sql);
move_uploaded_file($tempname, $folder);
header("Location:categories.php");   
} 

// subcategory
if (isset($_POST['subcategory_submit'])) { 
$category=$_POST['category'];
$sub_category_name=$_POST['sub_category_name'];

$filename = $_FILES["sub_category_image"]["name"]; 
$tempname = $_FILES["sub_category_image"]["tmp_name"];     
$folder = "images/".$filename; 
          
$sql = "insert into subcategory(category,sub_category_name,sub_category_image)
values('".$category."','".$sub_category_name."','".$filename."')"; 
mysqli_query($conn, $sql);
move_uploaded_file($tempname, $folder);
header("Location:subcategories.php");   
}

 

?>