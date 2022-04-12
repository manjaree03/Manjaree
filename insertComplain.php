<?php @session_start();

$a=$_REQUEST["txtSubject"];

$b= htmlspecialchars($_REQUEST["txtDetail"],ENT_QUOTES|ENT_COMPAT);


$usr=$_SESSION["uname"];

include("dbConnect.php");
mysqli_query($con,"insert into message_info(msg_heading,msg_detail,sender_name,receiver_name,reg_date,msg_status,reply_ref_id) values('$a','$b','$usr','mm',now(),'open',0)") or die("Query Error");



header("location:complainForm.php?status=1");



?>