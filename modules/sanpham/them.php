<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
<form action="modules/sanpham/xuly.php" method="post" enctype="multipart/form-data">
<table width="200" border="1">
  <tr>
    <td colspan="2">Thêm sản phẩm</td>
  </tr>
  <tr>
    <td>Mã sản phẩm</td>
    <td>
    <input type="text" name="product_id" id="product_id"></td>
  </tr>
  <tr>
    <td>Tên sản phẩm</td>
    <td>
      <input type="text" name="product_name" id="product_name" /></td>
  </tr>
  <tr>
    <td>Giá</td>
    <td>
      <input type="text" name="product_price" id="product_price" /></td>
  </tr>
  <tr>
    <td>Số lượng</td>
    <td>
      <input type="text" name="product_number" id="product_number" /></td>
  </tr>
  <tr>
    <td>Loại sản phẩm</td>
    <td>
      <select name="" id="product_type">
      <?php
	  		$sql="select * from loai";
			$loai=mysql_query($sql);
			while($dong=mysql_fetch_array($loai)){
	  ?>	
      				<option value="<?php echo $dong['loai_id'] ?>"><?php echo $dong['tenloai'] ?></option>
      <?php
			}
	  ?>
      </select></td>
  </tr>

  <tr>
    <td colspan="2">
    <input type="submit" name="them" value="Thêm">    </td>
  </tr>
</table>
</form>



