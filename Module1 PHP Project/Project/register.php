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
			  </div> <!-- end of tooplate_menu -->
    </div> <!-- END of header -->
    <div id="tooplate_main">
    	<div id="tooplate_content" class="left">
          <div id="comment_form">
            <?php
error_reporting(1);
include("connection.php");
if($_POST['sub'])
{ 
$name=$_POST['t1'];
$email=$_POST['t2'];
$password=$_POST['t3'];
$phone=$_POST['t4'];
$city=$_POST['t5'];
$town=$_POST['t6'];
if(mysql_query("insert into register(name,email,password,phone,city,township) values('$name','$email','$password','$phone','$city','$town')"))
{//register ko kyit tar pot
//echo "<script>location.href='reg_success.php?email=$email'</script>"; 
header("location:reg_success.php?name=$name & email=$email");}
else {$error= "user already exists";}}

?>
            <form  method="post">
                <h3><label>Name </label></h3>
                <input type="text" name="t1" id="t1" class="input_field" />
               <h3> <label>Email</label></h3>
                <input type="email" name="t2" id="t2" class="input_field" />
				 <h3><label>Password</label></h3>
                <input type="password" name="t3" id="t3" class="input_field" />
				 <h3><label>Phone </label></h3>
                <input type="text" name="t4" id="t4" class="input_field" />
				<h3> <label>City </label></h3>
                <input type="text" name="t5" id="t5" class="input_field" />
				<h3> <label>Country </label></h3>
                <input type="text" name="t6" id="t6" class="input_field" />
                <input type="submit" name="sub" id="sub" value="Register" class="submit_button" />
				 <input type="reset" name="Cancel" value="Cancel" class="submit_button" />
				<label><?php echo "<font color='red'>$error</font>";?></label>
            </form>
	</div>
	</div>
	</div>
</div>	<!-- /.content-container -->	
</body>
</html>