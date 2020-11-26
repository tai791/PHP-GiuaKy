<?php 
	session_start();
	ob_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
	<form method="post" action="">
		<center>
			<div style="width: 400px; height: 300px; background: #33FFFF;">
				<h2 style="background: #0000EE;">Mua sách</h2>
			<table>
				<tr>
					<td>ID sách: </td>
					<td><input type="text" name="id"></td>
				</tr>
				<tr>
					<td>Tên sách: </td>
					<td><input type="text" name="ten"></td>
				</tr>
				<tr>
					<td>Tác giả: </td>
					<td><input type="text" name="tacgia"></td>
				</tr>
				<tr>
					<td>Thể loại: </td>
					<td><input type="text" name="theloai"></td>
				</tr>
				<tr>
					<td>Số lượng: </td>
					<td><input type="number" name="soluong"></td>
				</tr>
				<tr>
					<td>Đơn giá: </td>
					<td><input type="text" name="dongia"></td>
				</tr>
			</table>
			<br><br>
			<input type="submit" name="submit" value="Mua sách">
			</div>
		</center>
	</form>
	<?php 
		if(isset($_POST['submit'])){
			$id = $_POST['id'];
			$ten = $_POST['ten'];
			$tacgia = $_POST['tacgia'];
			$theloai = $_POST['theloai'];
			$soluong = $_POST['soluong'];
			$dongia = $_POST['dongia'];
			if(!isset($_SESSION['arrMuaSach'][$id])){
				$_SESSION['arrMuaSach'][$id] = array(
					'ten' => $ten,
					'tacgia' => $tacgia,
					'theloai' => $theloai,
					'soluong' => $soluong,
					'dongia' => $dongia
					);
			}else{
				$_SESSION['arrMuaSach'][$id]['soluong'] += $soluong;
			}
			header('location:giohang.php');
		}
	 ?>
</body>
</html>
<?php 
	ob_end_flush();
 ?>