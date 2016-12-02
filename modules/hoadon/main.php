<div class="content">
	<?php
		if(isset($_GET['ac'])){
			$tam=$_GET['ac'];
		}else{
			$tam='';
			}
			if($tam=='lietke'){
				include('modules/donhang/lietke.php');
			}
			
	?>
</div>