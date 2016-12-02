<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$csdl = "mydb";

	$sql = "SELECT * FROM san_pham";
	$connection = mysqli_connect($servername, $username, $password, $csdl);
	$product = mysqli_query($connection, $sql);
?>
<table width="300" height="124" border="1">
  <tr>
    <td colspan="10"><div align="center">Danh sách sản phẩm</div></td>
  </tr>
	<td width="60">ID</td>
    <td width="60">Ma sản phẩm</td>
    <td width="56">Tên sản phẩm</td>
    <td width="56">Giá </td>
    <td width="56">Số lượng</td>
    <td width="56">Tên loại</td>
    <td colspan="2">Quản lý</td>
  </tr>
    <?php
		$id=0;
		while($dong = mysqli_fetch_array($product)){
	?>
  <tr>

    <td><?php echo $id; ?></td>
    <td><?php echo $dong['MaSP'] ?> </td>
    <td><?php echo $dong['TenSP'] ?></td>
    <td><?php echo $dong['GiaSP'] ?></td>
    <td><?php echo $dong['SoLuong'] ?></td>
    <td><?php echo $dong['LoaiSanPham_MaLoaiSP'] ?></td>
    <td width="25"><a href="index.php?quanly=sanpham&ac=sua&id=<?php echo $dong['product_id'] ?>">Sửa</a></td>
    <td width="170"><a href="modules/sanpham/xuly.php?id=<?php echo $dong['product_id'] ?>">Xóa</a></td>
  </tr>
  <?php
  $id++;
	}
  ?>
</table>

