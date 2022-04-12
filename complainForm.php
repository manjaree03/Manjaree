<?php
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
<div>&nbsp;</div>
<?php
  if(isset($_REQUEST["status"]))
  {
	echo("<div id='resMsg'>");
	  if($_REQUEST["status"]==1)
	  {
		echo("Complaint Registered");  
	  }
	  else if($_REQUEST["status"]==2)
	  {
	  echo("Error");	  
	  }
	  
	echo("</div>");  
  }
?>

<div id="myForm">
<form method="get" action="insertComplain.php">
<table>
<tr>  <td> <label>Enter Subject :</label> </td> <td> <input type="text" name="txtSubject">  </td> </tr>
<tr>  <td> <label>Enter Details :</label> </td> <td> <textarea name="txtDetail" rows="10"></textarea>  </td> </tr>
<tr>  <td> <input type="submit" value="Ok"> </td> <td> <input type="reset" value="Cancel">  </td> </tr>

</table>

</form>
</div><!--end of --myForm-->
<div>&nbsp;</div>
</div><!--end of leftUserContent-->


</div><!--end of userContent-->
</div><!--end of content-->
<?php
include("footer.php");
?>

	
	


