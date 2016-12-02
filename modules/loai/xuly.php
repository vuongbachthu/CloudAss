<?php
	include('../config.php');
		$loai=$_POST['loai'];
		$id=$_GET['id'];
		
	if(isset($_POST['them'])){
		//them
		
		$sql="insert into loai(tenloai) value('$loai')";
		mysql_query($sql);
		header('location:../../index.php?quanly=loai&ac=them');
	}elseif(isset($_POST['sua'])){
		//sua
		$sql="update loai set tenloai='$loai' where loai_id='$id'";
		mysql_query($sql);
		header('location:../../index.php?quanly=loai&ac=sua&id='.$id);
	}else{
	//xóa
	$sql="delete from loai where loai_id='$id'";
	mysql_query($sql);
	header('location:../../index.php?quanly=loai&ac=them');
	}
?>