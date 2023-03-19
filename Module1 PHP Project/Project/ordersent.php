<?php
	error_reporting(1);
	
	include("connection.php");
	
	if($_REQUEST['log']=='out')
	{
		session_destroy();
		header("location:index.php");
	}
?>
<!DOCTYPE html>
<!-- templatemo 413 flip turn -->
<!-- 
Flip Turn Template 
http://www.templatemo.com/tm-413-flip-turn
-->
<head>
	<title>Flip Turn - About</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/templatemo_style.css">
	<link href="tooplate_style.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<div id="tooplate_wrapper">
	<div id="tooplate_header">
	<h1 align="center">Oneline foof</h1>
		<div id="tooplate_menu">
			
			<ul class="nav right center-text">
				<li class="btn"><a href="index.php">Home</a></li>
				<li class="btn"><a href="product.php">Prduct</a></li>
				<li class="btn"><a href="register.php">Register</a></li>
				<li class="btn"><a href="contact.php">Contact</a></li>
			</ul>
			</div><!--end of tooplate_menu-->
			 </div> <!-- END of header -->
			 </div>
		<div id="tooplate_main">
    	
      <h1><i><span>Thank you for shopping with us</span></i></h1>
          <p><font color="blue"><i>Order sent successfully!</i></font></p>
		  <p>Your order no. is <?php echo "<font size='4' color='blue'>".$_REQUEST['order_no']."</font>";?></p>
		  <p>Thank you. Please come again.</p>
		  <br><br>
		  
		   <button><p><a href="?log=out">Log out</a></p></button> 
       
        

        <div class="clear"></div>
    </div>
		</div>
		</body>