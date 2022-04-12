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
</div><!--end of leftMargin-->

<div id="rightMargin">
<div>&nbsp;</div>
<?php
	if(isset($_REQUEST["status"]))
	{
		echo("<div id='resMsg'>");
		if($_REQUEST["status"]==1)
		{
			echo("Data has been saved.");
		}
		else if($_REQUEST["status"]==0)
		{
			echo("Data not saved.");
		}
		echo("</div>");
	}
?>
       
        <div id="myForm">
        <form method="post" action="insertNews.php" enctype="multipart/form-data">
        <table>
        <tr><td>Insert News Heading :</td><td><input type="text" name="txtHeading" />  </td></tr>
        <tr><td>Enter News Detail :</td><td><textarea name="txtDetail" rows="10"></textarea></td></tr>
        <tr><td><input type="submit" value="OK" /></td><td><input type="reset" value="CANCEL" /></td></tr>  
        </table>
        </form>
        </div><!--end of myForm--> 



</div><!--end of rightMargin-->
</div><!--end of adminContent-->
</div><!--end of content-->
<?php
include("footer.php");


}
else
{
  header("location:loginForm.php");	
}
?>
