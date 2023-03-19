<?php
session_start();
error_reporting(1);
$i=$_REQUEST['img'];
include("connection.php");
if(isset($_POST['log']))
{ if($_POST['id']=="" || $_POST['pwd']=="")
{ $err="fill your id and password first"; }
else 
{$d=mysql_query("select * from register where email='{$_POST['id']}' ");
$row=mysql_fetch_object($d);
$fid=$row->email;
$fpass=$row->password; 
if($fid==$_POST['id'] && $fpass==$_POST['pwd'])
{$_SESSION['sid']=$_POST['id'];
//echo"<script>location:href='order.php?img=$i'</script>";
header("location:order.php?img=$i"); 
}
else {$err=" your password is not"; }}
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
			<h1 align="center">PlayStation</h1>	
        <div id="tooplate_menu">
            <ul class="nav right center-text">
				<li class="btn"><a href="index.php">Home</a></li>
				<li class="btn"><a href="product.php">Prduct</a></li>
				<li class="btn"><a href="register.php">Register</a></li>
				<li class="btn"><a href="contact.php">Contact</a></li>
			</ul>
       </div> <!-- end of tooplate_menu -->
    </div> <!-- END of header -->
    <div id="tooplate_main">
    	
       <div id="contact_form" class="col_2">
                <h1>User Log In</h1>
                <form method="post" name="contact" action="#">
                      <div class="col_4 no_margin_right">
                        <label for="phone">User Email:</label>
                        <input type="email" id="id" name="id" class="required input_field" />
                    </div>
                    <div class="col_4 no_margin_right">
                        <label for="email">Password:</label>
                        <input type="password" id="pwd" name="pwd" class="validate-email required input_field" />
                    </div>
              
                     
                    <div class="clear"></div>
                    
                     <input type="submit" name="log"  value="Log in" class="submit_button" />
                </form>
				<h2><?php echo $err;?></h2>
            </div>    	
       
        
        

        <div class="clear"></div>
    </div>
    <div style="display:none;" class="nav_up" id="nav_up"></div>
</div> <!-- END of tooplate_wrapper -->
</body>