<?php @session_start();

$a="Re: ". $_REQUEST["txtSubject"];

$b= htmlspecialchars($_REQUEST["txtDetail"],ENT_QUOTES|ENT_COMPAT);

$c=$_REQUEST["txtMsgId"];



$usr=$_SESSION["uname"];



include("dbConnect.php");

$rsMsg=mysqli_query($con,"select sender_name from message_info where msg_id='$c'");
$row=mysqli_fetch_array($rsMsg);
$nm=$row["sender_name"];

mysqli_query($con,"insert into message_info(msg_heading,msg_detail,sender_name,receiver_name,reg_date,msg_status,reply_ref_id) values('$a','$b','$usr','$nm',now(),'open','$c')") or die("Query Error");

if($_SESSION["utype"]=="admin")
 header("location:adminInbox.php");
else
 header("location:userInbox.php");



?>