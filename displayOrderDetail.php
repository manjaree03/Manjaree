<?php
  include("header.php");
?>
<div id="content">
<div style="padding:20px;">
<?php
$a=$_REQUEST["ordid"];
echo("<h1>Order  No: $a has been placed successfully.</h1> ");
echo("<h3>Current Status : </h3>");
echo("<h3>Delivery Address : </h3>");

?>

</div>

</div><!--end of content-->
<?php
include("footer.php");
?>
