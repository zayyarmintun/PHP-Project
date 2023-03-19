<?php
error_reporting(1);
session_start();
$i=$_REQUEST['img'];
$_SESSION['sid']=$_POST['id'];
include("connection.php");
$i=$_REQUEST['img'];
if($_POST['ord'])
{ 
$prodno=$_POST['prodno'];
$price=$_POST['price'];
$name=$_POST['nam'];
$phone=$_POST['pho'];
$add=$_POST['add'];
$ordno=ord.rand(100,500);
if(mysql_query("insert into orders(productno,price,name,phone,address,order_no) values('$prodno','$price','$name','$phone','$add','$ordno')"))
{
//echo "<script>location.href='ordersent.php?prod'</script>";
header("location:ordersent.php?order_no=$ordno");  }
else {$error= "user already exists";}}

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
<?php
			include("connection.php");
			$sel=mysql_query("select * from item  where img='$i' ");
			$mat=mysql_fetch_array($sel);
			
			
			?>
            <form  method="post">
				
                <h3>Product No </h3>
                <input type="text" name="prodno" id="prodno" value="<?php echo $mat['prod_no'];?>" class="input_field" />
                <h3>price  </h3>
                <input type="text" name="price" id="price" value="<?php echo $mat['price'];?>" class="input_field" />
				 <h3>Name </h3>
                <input type="text" name="nam" id="nam" class="input_field" />
				 <h3>Phone </h3>
                <input type="text" name="pho" id="php" class="input_field" />
				 <h3>Address</h3>
                <textarea id="add" name="add" rows="0" cols="0" class="required"></textarea><br><br>
				 
                <input type="submit" name="ord" id="ord" value="sent order" class="submit_button" />
				 <input type="submit" name="Cancel" value="Cancel" class="submit_button" />
				
            </form>
			</body>