<?php
	$sql="select * from loai where loai_id=$_GET[id]"; 
	$loai=mysql_query($sql);
	$dong=mysql_fetch_array($loai);
?>
<form action="modules/loai/xuly.php?id=<?php echo $dong['loai_id'] ?>" method="post">
<table width="200" border="1">
  <tr>
    <td colspan="2">Sửa loại</td>
  </tr>
  <tr>
    <td>loại</td>
    <td>
    <input type="text" name="loai" id="loai" value="<?php echo $dong['tenloai'] ?>"></td>
  </tr>
  <tr>
    <td colspan="2">
    <input type="submit" name="sua" value="Sửa">    </td>
  </tr>
</table>
</form>



