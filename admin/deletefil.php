<?php 
include('../config.php');
$id=$_GET['id'];
$qry="delete from category where id='".$id."'";
mysqli_query($conn, $qry);

echo '<script> 
 alert("delete category");
 window.location="categories.php";
</script>';


?>