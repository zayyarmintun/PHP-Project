<?php
session_start();
if($_SESSION['sid']=="")
{
header('location:index.php');
}
else{
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Online Shop</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<!--
Template 2066 Wood Stock
http://www.tooplate.com/view/2066-wood-stock
-->
<link href="tooplate_style.css" rel="stylesheet" type="text/css" />

<script type="text/JavaScript" src="js/jquery-1.6.3.js"></script> 

<link rel="stylesheet" href="css/slimbox2.css" type="text/css" media="screen" /> 
<script type="text/JavaScript" src="js/slimbox2.js"></script> 

<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />

</head>
<body>

<div id="tooplate_wrapper">
<h1 align="center">Online Food Shop</h1>
	<div id="tooplate_header">
    	<a href="index.html" class="sitetitle">Wood Stock</a>
        <div id="tooplate_menu">
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="insert.php" >Insert </a></li>
                <li><a href="view-product.php" >Product</a></li>
                <li><a href="view-order.php">Order</a></li>
				<li><a href="view-feedback.php" class="selected">Feedback</a></li>
				<li><a href="logout.php">Log Out</a></li>
            </ul>
        </div> <!-- end of tooplate_menu -->
    </div> <!-- END of header -->
    <div id="tooplate_main">
    	<h2 align="center"><i> View Feedback Message</i></h2>
       <table  style="border-color:#000000;border-style: dotted;margin-left:-40px;" width="1000px" align="left" >
					
					<tr><th width="100px" height="50px">ID:</th>					
						<th width="100px" height="50px">Name:</th>
						<th width="100px" height="50px">Email:</th>
						<th width="100px" height="50px">Phone:</th>	
						<th width="100px" height="50px">Message:</th>						
					 </tr>	
					 <?php
					 error_reporting(1);
					 include("connection.php");
						$sel=mysql_query("select * from content ");
						while($row=mysql_fetch_array($sel))
							{		
									$id=$row['con_id'];					
									$name=$row['name'];
									$email=$row['email'];
									$phone=$row['phone'];
									$mesg=$row['mesg'];
									
						?>
					 <tr>
						
						<td width="100px" height="50px"><?php echo $id; ?></td>
						<td width="100px" height="50px"><?php echo $name; ?></td>
						<td width="100px" height="50px"><?php echo $email; ?></td>
						<td width="100px" height="50px"><?php echo $phone; ?></td>
						<td width="100px" height="50px"><?php echo $mesg; ?></td>
						
						
												
					  </tr>			
					<?php				  
							}	
					?>
					</table>
        
        

        <div class="clear"></div>
    </div>
    <div style="display:none;" class="nav_up" id="nav_up"></div>
</div> <!-- END of tooplate_wrapper -->


<?php }  ?>


</body>
</html>