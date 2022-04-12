<?php
  include("header.php");
?>
<div id="content">
<div id="newsDetail">
<?php
include("dbConnect.php");
$a=$_REQUEST["nid"];
$rsNews=mysqli_query($con,"select * from news_info where news_id='$a'");
$row=mysqli_fetch_array($rsNews);

echo("<h2>".$row["news_heading"]."</h2>");

echo("<h4>".$row["news_detail"]."</h4>");


?>

</div>

</div><!--end of content-->
<?php
include("footer.php");
?>
