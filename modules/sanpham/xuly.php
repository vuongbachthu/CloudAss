<?php
	include('../config.php');
		$id=$_GET['id'];
		$product_title=$_POST['product_title'];
		$product_desc=$_POST['product_desc'];
		$product_cat=$_POST['product_cat'];
		$product_brand=$_POST['product_brand'];
		$product_keyword=$_POST['product_keyword'];
		$product_price=$_POST['product_price'];
		$product_image=$_FILES['image']['name'];
        $product_image_tmp=$_FILES['image']['tmp_name'];
        move_uploaded_file($product_image_tmp,"uploads/".$product_image);
		
	if(isset($_POST['them'])){
		//them
		
		 $sql="insert into products (product_title,product_price,product_cat,product_brand,product_desc,product_image,product_keywords) values('$product_title','$product_price','$product_cat','$product_brand','$product_desc','$product_image','$product_keyword')";
		mysql_query($sql) or die('ko the insert');
		header('location:../../index.php?quanly=sanpham&ac=them');
	}elseif(isset($_POST['sua'])){
		//sua
		if($product_image!=''){
		$sql="update products set product_title ='$product_title',product_price='$product_price',product_cat='$product_cat',product_brand='$product_brand',product_desc='$product_desc',product_image='$product_image',product_keywords='$product_keyword' where product_id='$id'";
		}else{
		$sql="update products set product_title ='$product_title',product_price='$product_price',product_cat='$product_cat',product_brand='$product_brand',product_desc='$product_desc',product_keywords='$product_keyword' where product_id='$id'";
		}
		mysql_query($sql);
		header('location:../../index.php?quanly=sanpham&ac=sua&id='.$id);
	}else{
	//xóa
	$sql="delete from products where product_id='$id'";
	mysql_query($sql);
	header('location:../../index.php?quanly=sanpham&ac=them');
	}
?>