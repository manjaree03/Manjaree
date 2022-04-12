<?php @session_start();
  include("header.php");
?>
<div id="content">
<div id="userContent">
<div id="leftUserContent">
<?php
include("userMenu.php");
?>

</div><!--end of leftUserContent-->
<div id="rightUserContent">
<div id="inbox">
<?php
include("dbConnect.php");
$usr=$_SESSION["uname"];
$rsMsg=mysqli_query($con,"select msg_id,msg_heading,sender_name,reg_date,msg_status from message_info where receiver_name='$usr'");
echo("<table border='1'><tr><th>Subject</th><th>Sender Name</th><th>Receive Date</th><th>Status</th><tr>");
while($row=mysqli_fetch_array($rsMsg))
{
  echo("<tr>");
	$id=$row["msg_id"];
    echo("<td>");
	 echo("<a href='inboxUserDetail.php?mid=$id'>");
	  echo($row["msg_heading"]);
	 echo("</a>"); 
    echo("<td>");
	  echo($row["sender_name"]);
	echo("</td>");
    echo("<td>");
	  echo($row["reg_date"]);
	echo("</td>");
    echo("<td>");
	  echo($row["msg_status"]);
	echo("</td>");
 
  echo("</tr>");
}
echo("</table>");


?>
</div><!--end of inbox-->

</div><!--end of leftUserContent-->


</div><!--end of userContent-->

</div><!--end of content-->
<?php
include("footer.php");
?>
