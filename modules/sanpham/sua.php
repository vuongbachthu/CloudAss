<?php
	$sql="select * from products where product_id=$_GET[id]";
	$sanpham=mysql_query($sql);
	$row=mysql_fetch_array($sanpham);
?>
<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>

<form action="modules/sanpham/xuly.php?id=<?php echo $row['product_id'] ?>" method="post" enctype="multipart/form-data">
<table width="200" border="1">
  <tr>
    <td colspan="2">Sửa sản phẩm</td>
  </tr>
  <tr>
    <td>Product_title</td>
    <td>
    <input type="text" name="product_title" id="product_title" value="<?php echo $row['product_title'] ?>"></td>
  </tr>
  <tr>
    <td>Product_price</td>
    <td>
      <input type="text" name="product_price" id="product_price" value="<?php echo $row['product_price'] ?>" /></td>
  </tr>
  <tr>
    <td>Product_cat</td>
    <td>
      <select name="product_cat" id="product_cat">
      <?php
	  		$sql="select * from loai";
			$cat=mysql_query($sql);
			while($dong_cat=mysql_fetch_array($cat)){
				if($dong_cat['loai_id']==$row['product_cat']){
	  ?>	
      				<option value="<?php echo $dong_cat['loai_id'] ?>" selected="selected"><?php echo $dong_cat['tenloai'] ?></option>
      <?php
			}else{?>
				<option value="<?php echo $dong_cat['loai_id'] ?>"><?php echo $dong_cat['tenloai'] ?></option>
	  
      <?php
			}
			}
	  ?>
      </select></td>
  </tr>
  <tr>
    <td>Product_brand</td>
    <td>  <select name="product_brand" id="product_brand">
      <?php
	  		$sql="select * from hieu";
			$hieu=mysql_query($sql);
			while($dong=mysql_fetch_array($hieu)){
				if($dong['hieu_id']==$row['product_brand']){
	  ?>	
      				<option value="<?php echo $dong['hieu_id'] ?>" selected="selected"><?php echo $dong['tenhieu'] ?></option>
      <?php
			}else{?>
	 			<option value="<?php echo $dong['hieu_id'] ?>"><?php echo $dong['tenhieu'] ?></option>
      <?php
			}
			}
	  ?>
      </select></td>
  </tr>
  <tr>
    <td>Product_desc</td>
    <td>
      <textarea name="product_desc" id="product_desc" cols="45" rows="5"><?php echo $row['product_desc'] ?></textarea></td>
  </tr>
  <tr>
    <td>Product_image</td>
    <td><input type="file"  name="image"  />
    <?php
		echo '<img src="modules/sanpham/uploads/'.$row['product_image'].'" width="80" height="80"/> ';
	?>
    </td>
  </tr>
  <tr>
    <td>Product_keywords</td>
    <td>
      <input type="text" name="product_keyword" id="product_keyword" value="<?php echo $row['product_keywords'] ?>" /></td>
  </tr>
  <tr>
    <td colspan="2">
    <input type="submit" name="sua" value="Sửa">    </td>
  </tr>
</table>
</form>



