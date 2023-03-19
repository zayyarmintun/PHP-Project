<!DOCTYPE html>
<!-- templatemo 413 flip turn -->
<!-- 
Flip Turn Template 
http://www.templatemo.com/tm-413-flip-turn
-->
<head>
	<title>Online Shop</title>
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
	<h1 align="center">Oneline food Shop</h1>
		<div id="tooplate_menu">
			
			<ul class="nav right center-text">
				<li class="btn"><a href="index.php">Home</a></li>
				<li class="btn"><a href="product.php">Prduct</a></li>
				<li class="btn"><a href="register.php">Register</a></li>
				<li class="btn"><a href="contact.php">Contact</a></li>
			</ul>
			</div><!--end of tooplate_menu-->
			 </div> <!-- END of header -->
			  <div id="tooplate_main">
		<?php
error_reporting(1);
include("connection.php");
if($_POST['sub'])
{ 
$name=$_POST['t1'];
$email=$_POST['t2'];
$phone=$_POST['t3'];
$mesg=$_POST['t4'];
if(mysql_query("insert into content(name,email,phone,mesg) values('$name','$email','$phone','$mesg')"))
{$er="<font color='red' size='+1'> Message sent successfully</font>"; }
}
?>
	<h2>Contact Information</h2>
            <div id="contact_form" class="col_2">
                <h2><marquee><i>Send a message</i></marquee></h2>
                <form method="post" name="contact" action="#">
                    <div class="col_4">
                       <h4> <label for="phone">Name:</label></h4>
                        <input type="text" id="t1" name="t1" class="required input_field" />
                    </div>
                    <div class="col_4 no_margin_right">
                       <h4> <label for="email">Email:</label></h4>
                        <input type="email" id="t2" name="t2" class="validate-email required input_field" />
                    </div>
                    <div class="clear h10"></div>
                     <div class="col_4 no_margin_right">
                       <h4> <label for="phone">Phone:</label></h4>
                        <input type="text" id="t3" name="t3" class="required input_field" />
                    </div>
                    <div class="clear"></div>
                   <h4> <label for="text">Message:</label><h4> <textarea id="t4" name="t4" rows="0" cols="0" class="required"></textarea>
                     <input type="submit" name="sub"  id="sub" value="Send" class="submit_button" />
                </form>
				<h2><?php echo $er;?></h2>
            </div>  
            <div class="col_2 no_margin_right">
			</div>
	</div>
		</div>	<!-- /.content-container -->
	<script type="text/javascript" src="js/templatemo_script.js"></script>
	
	</script>
</body>
</html>