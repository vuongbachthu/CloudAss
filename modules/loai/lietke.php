<?php
	
	$sql="select * from loai order by loai_id asc ";
	$loai=mysql_query($sql);
?>
<table width="268" height="124" border="1">
  <tr>
    <td colspan="4"><div align="center">Liệt kê loại</div></td>
  </tr>
  <tr>
    <td width="60">ID</td>
    <td width="56">Tên loại</td>
    <td colspan="2">Quản lý</td>
  </tr>
    <?php
   	$i=0;
  	while($dong=mysql_fetch_array($loai)){
  ?>
  <tr>

    <td><?php echo $i; ?></td>
    <td><?php echo $dong['tenloai'] ?> </td>
    <td width="25"><a href="index.php?quanly=loai&ac=sua&id=<?php echo $dong['loai_id'] ?>">Sửa</a></td>
    <td width="170"><a href="modules/loai/xuly.php?id=<?php echo $dong['loai_id'] ?>">Xóa</a></td>
  </tr>
  <?php
  $i++;
	}
  ?>
</table>

