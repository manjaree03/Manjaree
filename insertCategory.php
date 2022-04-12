<?php
$a=$_REQUEST["txtName"];
$b=$_REQUEST["txtDName"];
$c=$_FILES["flCategory"];
$d=$_REQUEST["cmbType"];
$e=$_REQUEST["cmbParent"];

$img=$c["name"];
move_uploaded_file($c["tmp_name"],".\\collection\\$img");

include("dbConnect.php");

mysqli_query($con,"insert into category_info(cat_name,cat_dname,image_path,cat_type,cat_parent_id,reg_date) values('$a','$b','$img','$d','$e',now())");

header("location:categoryForm.php?status=1");



?>