<?php
include("header.php");
?>
<div id="content">
<?php
echo("<div id='cartInfo'>");
$usr=$_SESSION["uname"];
include("dbConnect.php");
$rsCart=mysqli_query($con,"select cart_id, item_name,cart_info.item_rate,item_qty,item_img from cart_info,item_info where cart_info.item_id=item_info.item_id and cust_name='$usr' order by cart_id");
$cnt=0;
echo("&nbsp;&nbsp;&nbsp;&nbsp;");
echo("<table border='1'>");
echo("<tr><th>Sl. No.</th><th>Item Name</th><th>Image</th><th>Rate</th><th>Quantity</th><th>Amount</th> <th>Status</th></tr>");
$total=0;
while($row=mysqli_fetch_array($rsCart))
{
	$cnt=$cnt+1;
 echo("<tr>");
  echo("<td>"); 
  echo($cnt); 
 echo("</td>"); 

 echo("<td>"); 
  echo($row["item_name"]); 
 echo("</td>");
 
 echo("<td>"); 
  $img=$row["item_img"];
  echo("<img src='.\\collection\\$img' width='60' height='60'>");
 echo("</td>"); 
 
  echo("<td>"); 
  echo($row["item_rate"]); 
 echo("</td>");
  
  echo("<td>"); 
  echo($row["item_qty"]); 
 echo("</td>"); 

  echo("<td>"); 
  $amnt=$row["item_qty"]*$row["item_rate"];
  echo($amnt);
  $total=$total + $amnt;
 echo("</td>"); 
 
  echo("<td>"); 
  $id=$row["cart_id"];
  echo("<a href='deleteCart.php?cid=$id'>Delete</a>");
  echo("</td>");   
 	
 echo("</tr>");	
}

echo("<tr> <td align='right' colspan='5'>Total Amount : </td><td>$total</td></tr>");


echo("</table>");

if($_SESSION["cart_count"]!=0)
{
echo("<span id='orderButton'><a href='confirmOrder.php?amnt=$total'>Place Order</a></span>");
}
echo("</div>");
?>

</div><!--end of content-->
<?php
include("footer.php");
?>
