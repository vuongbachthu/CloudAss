<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$csdl = "mydb";
	$connection = mysqli_connect($servername, $username, $password, $csdl);

	$sql="select * from type where type_id = 'L01'"; 
	$loai = mysqli_query($connection, $sql);
	$dong = mysqli_fetch_array($loai);
?>
<form action="modules/loai/xuly.php?id=<?php echo $dong['type_id'] ?>" method="post">
<table width="auto" height="100px" border="1">
  <tr>
    <td colspan="5" align="center" height="50px">Sửa loại sản phẩm</td>
  </tr>
  <tr>
    <td width="130" height="40px">Mã loại sản phẩm</td>
    <td>
    <input type="text" name="type_id" id="type_id" value="<?php echo $dong['type_id'] ?>"></td>
  </tr>
  <tr>
    <td width="130" height="40px">Tên loại sản phẩm</td>
    <td>
      <input type="text" name="type_name" id="type_name" value="<?php echo $dong['type_name'] ?>"></td>
  </tr>
  <tr width="auto" height="40px" align="center">
    <td colspan="2">
    <input type="submit" name="sua" value="Sửa">    </td>
  </tr>
</table>
</form>



