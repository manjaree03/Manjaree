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
<div id="rightMagin">

<div>&nbsp;</div>
<?php
  if(isset($_REQUEST["status"]))
  {
	echo("<div id='resMsg'>");
	  if($_REQUEST["status"]==1)
	  {
		echo("Complain has been saved.");  
	  }
	  else if($_REQUEST["status"]==2)
	  {
	  echo("Wrong Password");	  
	  }
	  
	echo("</div>");  
  }
?>
<?php
$mid=$_REQUEST["mid"];
include("dbConnect.php");
$rsMsg=mysqli_query($con,"select * from message_info where msg_id='$mid'");
$row=mysqli_fetch_array($rsMsg);

$head=$row["msg_heading"];
$dtl=$row["msg_detail"];


?>
<div id="myForm">
<form method="get" action="insertReplyComplain.php">
<table>
<input type="hidden" name="txtMsgId" value='<?=$mid?>' />
<tr>  <td> <label>Enter Subject :</label> </td> <td> <input type="text" name="txtSubject" value='<?=$head;?>' readonly="readonly">  </td> </tr>
<tr>  <td> <label>Enter Details :</label> </td> <td> <textarea name="txtRecDetail" rows="10" disabled="disabled"><?=$dtl;?></textarea>  </td> </tr>
<tr>  <td> <label>Reply Details :</label> </td> <td> <textarea name="txtDetail" rows="10" ></textarea>  </td> </tr>

<tr>  <td> <input type="submit" value="Reply"> </td> <td> <input type="reset" value="Cancel">  </td> </tr>

</table>

</form>
</div><!--end of --myForm-->
<div>&nbsp;</div>


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
