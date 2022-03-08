
<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V"crossorigin="anonymous"/>
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
	<div id="header" style="margin-bottom: 50px;">
		<a href="index.php" style="color: #232323; text-decoration: none" class="customfont">marketland</a>
	</div>
	<div class="contentbg">
		<div class="content-form">
		<form action="" method="post">
		<form method="POST">
			Last Name<input type="text">
			First Name<input type="text" name="">
			Username<input type="text" name="">
    Password<input type="password" name="password" required />
    <input type="submit" value="Sign Up" style="order-style: none;
	outline: none;
	padding: 5px 10px;
	text-align: center;
	background-color: #D8D3CD;
	color: #232323;"><br />
    
  </form>
<?php
$msg="";
if(isset($_POST['password'])) {
  $password = $_POST['password'];
  $number = preg_match('@[0-9]@', $password);
  $uppercase = preg_match('@[A-Z]@', $password);
  $lowercase = preg_match('@[a-z]@', $password);
  $specialChars = preg_match('@[^\w]@', $password);
 
  if(strlen($password) < 8 || !$number || !$uppercase || !$lowercase || !$specialChars) {
    $msg = "Password must be at least 8 characters in length and must contain at least one number, one upper case letter, one lower case letter and one special character.";
  } else {
    $msg = "Account Created";
  }
}
?>
		<span><?php echo $msg?></span>
	
	</div>
</body>
</html>