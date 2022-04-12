<?php
include("header.php");
?>
<div id="content">
<div>&nbsp;</div>
<div style="text-align:right;margin-right:10px;">
   <a href="registrationForm.php">NEW USER</a><br />
   <a href="loginForm.php">LOGIN</a>
</div>
<div id="leftIndexContent">
            <div id="categoryArea">
            <?php
            if(isset($_REQUEST["cid"]))
            $prid=$_REQUEST["cid"];
            else
            $prid=0;
            
            include("dbConnect.php");
            $rsCat=mysqli_query($con,"select * from category_info where cat_parent_id=$prid order by cat_dname") or die("query error");
            while($row=mysqli_fetch_array($rsCat))
            {
                $id=$row["cat_id"];
                echo("<div class='category'>");
                echo("<a href='index.php?cid=$id'>");
                echo($row["cat_dname"]."<br><br>");
                $img=$row["image_path"];
                echo("<img src='.\\collection\\$img' width='100' height='100'>");
                echo("</a>");
                echo("</div>");	
            }
            ?>
            
            </div><!--end of categoryArea-->
            
            <div id="itemArea">
            
            <?php
            
            $rsCat=mysqli_query($con,"select * from item_info where item_cat=$prid order by item_name") or die("query error");
            while($row=mysqli_fetch_array($rsCat))
            {
                $id=$row["item_id"];
                echo("<div class='item'>");
                
                echo("<a href=''>");
                echo($row["item_name"]."<br><br>");
                
                $img=$row["item_img"];
                echo("<img src='.\\item\\$img' width='100' height='100'>");
                
                echo("</a>"."<br><br>");
                
                $rt=$row["item_rate"];
                $dis=$row["item_discount"];
                $dtl=$row["item_detail"];
                
               
				
				//offer wala discount part
				
				 $spdis=0;
				 $rsOffer=mysqli_query($con,"select * from offer_info where now()>=offer_start_dt and now()				                 <=offer_end_dt");
				 
				 while($rowOffer=mysqli_fetch_array($rsOffer))
				 {
					 $cats=$rowOffer["cat_type"];
					 $catarr=explode("-",$cats);
					 if(in_array($prid,$catarr))
					 {
						 $spdis=$spdis+$rowOffer["offer_discount"];
					 }
				 }
				 
				 $dis=$dis+$spdis;
				 
				 $drate=$rt-$rt*$dis/100;
                
                echo("<div style='height:75px;overflow:hidden;padding:5px;'>");
                
                echo("Rate :<s>"." Rs. ".$rt."</s>");
                echo("<br>");
                
                echo("Dis. Rate : ".$drate."<br>");
                
                echo("Detail :".$dtl."<br>");
                echo("</div>");
                
                echo("<div class='buyButton'><a href='checkAlreadyLogin.php?itmid=$id&itmrate=$drate'>BUY NOW</a></div>");
                
                echo("</div>"); //end of item_id	
            }
            ?>
            
            
            
            </div><!--end of itemArea-->
        </div><!--end of leftIndexContent-->
<div id="rightIndexContent">
                <div id="newsArea">
                <?php
                $rsNews=mysqli_query($con,"select news_id,news_heading from news_info where news_status=1 order by news_id desc");
                echo("<marquee height='100%' direction='up' onmouseover='this.stop();' onmouseout='this.start();' >");
                while($row=mysqli_fetch_array($rsNews))
                {
                    $id=$row["news_id"];
                  echo("<a href='newsDetail.php?nid=$id'>");	
                  echo($row["news_heading"]);
                  echo("</a>");
                  
                  echo("<hr>");	
                }
                echo("</marquee>");
                ?>
                </div><!--end of newsArea-->

</div><!--end of rightIndexContent-->
</div><!--end of content-->
<?php
include("footer.php");
?>
