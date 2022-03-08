<!DOCTYPE html>
<html>
<head>
	<title>Order</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V"crossorigin="anonymous"/>
	<script>
	function getVal()
	{
		var item_price, quantity, total_purchase;
		item_price=document.getElementById('item_price').value;
		quantity=document.getElementById('quantity').value;
		total=item_price*quantity;
		document.getElementById('total_purchase').value=total;
	}
</script>
	<style type="text/css">
		#content {
			padding:10px;
		}
		#table1{
			margin-left: auto;
			margin-right: auto;
		}
		select{
			width: 100%;
			height: 30px;
			border: none;
			text-indent: 10px;
		}
		input:focus {
 			color: #3A3B3B;
 			outline: 1px solid #3A3B3B;  
		}
		button:active{
    	background:#797A7E;
    	color: white;
		}
		#textcol{
			width: 100%;
			margin: 0;
			padding: 0;
		}
		.button{
			float: right;
			background-color: #E0ECE4;
			border: 0;
			padding: 10px;
			border-radius: 3px;
		}
		input{
			height: 30px;
			border: 0;
			text-indent: 10px;
		}
		#tdbg{
			background-color: #E0ECE4;
		}
		.display {
			none
		}
	</style>
</head>

<?php
	$hostname="localhost";
	$username="root";
	$password="";
	$dbname="db_order";

	$openconnection=mysqli_connect($hostname,$username,$password,$dbname);

	if(!$openconnection)
	{
		die("Failed to connect to MySQL: ". mysqli_connect_error());
	}

	if (isset($_POST['submit']))
	{
		$name_of_item=$_POST['name_of_item'];
		$item_price=$_POST['item_price'];
		$quantity=$_POST['quantity'];
		$payment=$_POST['payment'];
		$total_purchase=$_POST['total_purchase'];
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$country=$_POST['country'];
		$street_address=$_POST['street_address'];
		$city=$_POST['city'];
		$postcode=$_POST['postcode'];
		$phone_number=$_POST['phone_number'];
		$email_address=$_POST['email_address'];

		mysqli_query($openconnection,"INSERT into tbl_order(name_of_item,item_price,quantity,payment,total_purchase,firstname,lastname,country,street_address,city,postcode,phone_number,email_address) VALUES('$name_of_item','$item_price','$quantity','$payment','$total_purchase','$firstname','$lastname','$country','$street_address','$city','$postcode','$phone_number','$email_address')") or die(mysqli_error());
	}


?>

<body>
	<div id="header">
	<a class="customfont">marketland</a>
	<a href="home.php">home</a>
	<a href="shop.php">shop</a>
	<a href="myform.php">order</a>
	<a href="index.php"><i class="fas fa-sign-out-alt"></i></a>
</div>
	<form name="myform" method="post">
		<div id="content">
		<table id="table1" cellpadding="5" cellspacing="5" style="border: 1px solid #3A3B3B">
			<tr>
				<td id="tdbg" colspan="2"><b>Your order</b></td>
				<td id="tdbg"><b>Payment</b></td>
			</tr>
			<tr>
				<td>Name of Item</td>
				<td><input type="text" name="name_of_item"></td>
				<td><input type="radio" name="payment" value="Cash on Delivery"><label>Cash on Delivery</label></td>
			</tr>
			<tr>
				<td>Item Price</td>
				<td><input id="item_price" type="text" name="item_price"></td>
				<td><input type="radio" name="payment" value="Credit Card/Debit Card"><label>Credit Card/Debit Card</label></td>
			</tr>
			<tr>
				<td>Quantity</td>
				<td><input id="quantity" type="number" name="quantity"></td>
				<td></td>
			</tr>
			<tr>
				<td><textarea name="total_purchase" id="total_purchase" style="display:none;" readonly></textarea></td>
				<td></td>
			</tr>
			<tr>
				<td id="tdbg" colspan="3"><b>Checkout</b></td>
			</tr>
			<tr>
				<td>First Name</td>
				<td>Last Name</td>
				<td></td>
			</tr>
			<tr>
				<td><input type="text" name="firstname"></td>
				<td><input type="text" name="lastname"></td>
				<td></td>
			</tr>
			<tr>
				<td>Country</td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td colspan="3">
					<select name="country" >
					<option></option>
					<option value="Japan">Japan</option>
					<option value="Korea">Korea</option>
					<option value="Philippines">Philippines</option>
					<option value="Singapore">Singapore</option>
					</select></td>
			</tr>
			<tr>
				<td>Street Address</td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td colspan="3"><input type="text" id="textcol" name="street_address"></td>
			</tr>
			<tr>
				<td>City</td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td colspan="3"><input type="text" id="textcol" name="city"></td>
			</tr>
			<tr>
				<td>Postcode</td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td colspan="3"><input type="text" id="textcol" name="postcode"></td>
			</tr>
			<tr>
				<td>Phone Number</td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td colspan="3"><input type="text" id="textcol" name="phone_number"></td>
			</tr>
			<tr>
				<td>Email Address</td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td colspan="3"><input type="email" id="textcol" name="email_address"></td>
			</tr>
			<tr>
				<td></td>
				<td colspan="2"><input type="submit" name="submit" onclick="getVal()" style="float: right;background-color: #E0ECE4;border: 0;padding: 10px;border-radius: 3px;"></td>
			</tr>
		</table>
		</div>
	</form>
	<div id="footer">
	marketland 2021
</div>
</body>
</html>