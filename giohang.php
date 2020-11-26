<?php 
	session_start();
	ob_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">

	</style>
</head>
<body>
	<center>
		<div style="width: 500px; height: 400px; background: #33FFFF">
			<h1 style="background: #0000EE">Trang giỏ hàng</h1>
	<table border="1">
		<tr>
			<th>Tên sách</th>
			<th>Tác giả</th>
			<th>Thể loại</th>
			<th>Số lượng</th>
			<th>Đơn giá</th>
			<th>Thành tiền</th>
		</tr>
		<?php 
		if(!$_SESSION['arrMuaSach']){
			header('location: muasach.php');
		}
		$tongTien = 0;
		foreach ($_SESSION['arrMuaSach'] as $sach) {
			$thanhTien = $sach['dongia'] * $sach['soluong'];
			$tongTien += $thanhTien;
	 	?>
		<tr>
			<td><?php echo $sach['ten'] ?></td>
			<td><?php echo $sach['tacgia'] ?></td>
			<td><?php echo $sach['theloai'] ?></td>
			<td><?php echo $sach['soluong'] ?></td>
			<td><?php echo number_format($sach['dongia'], 0, ",", ".") ?> VND</td>
			<td><?php echo number_format($thanhTien, 0, ",", ".") ?> VND</td>
		</tr>
		<?php 
			}
		 ?>
		<tr>
			<td colspan="6" align="right">Tổng tiền: <?php echo number_format($tongTien, 0, ",", ".") ?> VND</td>
		</tr>
	</table>
	<a href="muasach.php">Quay lại</a>
		</div>
	</center>
	
</body>
</html>
<?php 
	ob_end_flush();
 ?>