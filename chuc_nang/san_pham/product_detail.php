<?php 
	include("ket_noi.php");	
	$_SESSION['trang_chi_tiet_gio_hang']="co";
	$id=$_GET['id'];
	$tv="select * from san_pham where id='$id'";
	$tv_1=mysqli_query($conn,$tv);
	$tv_2=mysqli_fetch_array($tv_1);
	$link_anh="hinh_anh/san_pham/".$tv_2['hinh_anh'];
	$link_chi_tiet="?thamso=caterogy&id=".$tv_2['thuoc_menu'];
?>
<div class="name_detail">
	<a href="<?php echo $link_chi_tiet ?>"> Sản phẩm <?php echo $tv_2['thuoc_menu']; ?> </a> 
	<span> > </span>
	<span><?php echo $tv_2['ten']; ?></span>
</div>
<?php
	echo "<table>";
		echo "<tr>";
			echo "<td width='250px' align='center' >";
				echo "<img src='$link_anh' width='200px' style='float: left;'>";
			echo "</td>";
			echo "<td valign='top' >";
				echo "<a href='#'>";
					echo $tv_2['ten'];
				echo "</a>";
				echo "<br>";
				echo "<br>";
				$gia=$tv_2['gia'];
				$gia=number_format($gia,0,",",".");
				echo $gia;
				echo "<br>";
				echo "<br>";
				echo "<form>";
					echo "<input type='hidden' name='thamso' value='gio_hang' > ";
					echo "<input type='hidden' name='id' value='".$_GET['id']."' > ";
					echo "<input type='text'  class='form-control' name='so_luong' value='1' style='width:60px; display: inline-block;' > ";
					echo "<button type='submit' class='btn btn-info' class='submit_button' style='margin-bottom: 3px; margin-left: 25px;'>Thêm vào giỏ</button>";
				echo "</form>"; 
			echo "</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td colspan='2' >";
				echo "<br>";
				echo "<br>";
				echo $tv_2['noi_dung'];
			echo "</td>";
		echo "</tr>";
	echo "</table>";
?>