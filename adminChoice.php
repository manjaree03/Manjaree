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
