<?php @session_start();
if(isset($_SESSION["uname"]) && $_SESSION["uname"]=="mm")
{
	
	

?>
<?php
  include("header.php");
?>
<div id="content">
<div id="adminContent">
<div id="leftMargin">
<?php
  include("adminMenu.php");
?>

</div> <!--leftContent-->
<div id="rightMargin">

<div id="inbox">
<?php
include("dbConnect.php");
$usr=$_SESSION["uname"];
$rsMsg=mysqli_query($con,"select msg_id,msg_heading,sender_name,reg_date,msg_status from message_info where receiver_name='$usr' order by msg_id desc");
echo("<table border='1'><tr><th>Subject</th><th>Sender Name</th><th>Receive Date</th><th>Status</th><tr>");
while($row=mysqli_fetch_array($rsMsg))
{
  echo("<tr>");
    echo("<td>");
	$id=$row["msg_id"];
	 echo("<a href='inboxAdminDetail.php?mid=$id'>");
	  echo($row["msg_heading"]);
	 echo("</a>"); 
	echo("</td>");
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


</div><!--rightContent-->
</div><!--adminContent-->

</div><!--end of content-->
<?php
include("footer.php");

}
else
{
  header("location:loginForm.php");	
}
?>
