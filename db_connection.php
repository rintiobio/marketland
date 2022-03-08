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