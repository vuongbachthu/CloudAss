
<?php
	$sql="select cart.id,products.product_id,cart_detail.product_id,product_title, fullname,date,cart_id,quantity,price from cart,cart_detail,products where products.product_id=cart_detail.product_id and cart_detail.cart_id=cart.id";
	$run_cart=mysql_query($sql);
?>
<table width="100%" border="1" >
  <tr>
    <td colspan="7"><div align="center">Liệt kê đơn hàng</div></td>
  </tr>
  <tr>
    <td>ID</td>
    <td>Tên người mua</td>
    <td>Sản phẫm</td>
    <td>Số lượng</td>
    <td>Giá</td>
    <td>Ngày đặt</td>
    <td>Quản lý</td>
  </tr>
  <?php
  	$i=0;
  	while($dong_cart=mysql_fetch_array($run_cart)){
  ?>
  <tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $dong_cart['fullname'] ?></td>
    <td><?php  echo $dong_cart['product_title'];?></td>
    <td><?php  echo $dong_cart['quantity']?></td>
    <td><?php  echo $dong_cart['price']?></td>
    <td><?php  echo $dong_cart['date']?></td>
    <td><a href="modules/donhang/xuly.php?id=<?php echo $dong_cart['id'] ?>">Xóa</a></td>
  </tr>
  <?php
  $i++;
	}
  ?>
</table>
