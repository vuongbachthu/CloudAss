<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$csdl = "mydb";
		$connection = mysqli_connect($servername, $username, $password, $csdl);
		
		$customer_id = $_POST['customer_id'];
		$customer_name = $_POST['customer_name'];
		$customer_address = $_POST['customer_address'];
		$customer_phone = $_POST['customer_phone'];
		
		
	if(isset($_POST['them'])){
		//them
		
		$sql="insert into customer(customer_id, customer_name, customer_address, customer_phone) value('$customer_id', '$customer_name', '$customer_address', '$customer_phone')";
		mysqli_query($connection, $sql) or die('ko the insert');
		header('location:../../index.php?quanly=khachhang&ac=them');
	}elseif(isset($_POST['sua'])){
		//sua
		$sql="update customer set customer_id ='$customer_id', customer_name='$customer_name', customer_address ='$customer_address', customer_phone='$customer_phone' where customer_id='$customer_id'";
		
		mysqli_query($connection, $sql) or die('ko the Update');
		header('location:../../index.php?quanly=khachhang&ac=sua&id='.$type_id);
	}else if(isset($_POST['xoa'])){
	//xóa
		$sql="delete from customer where customer_id = 'KH03'";
		mysqli_query($connection, $sql);
		header('location:../../index.php?quanly=khachhang&ac=sua&id='.$type_id);
	}
?>