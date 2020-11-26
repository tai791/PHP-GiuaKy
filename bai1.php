<?php 
	$dvg = isset($_POST["dvg"]) ? $_POST["dvg"] : "";
	$tg = isset($_POST["tg"]) ? $_POST["tg"] : "";
	$ttt = isset($_POST["ttt"]) ? $_POST["ttt"] : "";
	$kq = isset($_POST["kq"]) ? $_POST["kq"] : "";
	$kq = str_replace($tg, $ttt, $dvg);
 ?>
<form method="post">
	<center>
		<div style="width: 500px; height: 200px; background: grey;">
			<h1 style="color: blue">Thay thế chuỗi</h1>
			<table>
				<tr>
					<td>Đoạn văn gốc: </td>
					<td><input type="text" name="dvg" value="<?php if(isset($_POST["dvg"])) echo $_POST["dvg"] ?>"></td>
				</tr>
				<tr>
					<td>Từ gốc: </td>
					<td><input type="text" name="tg" value="<?php if(isset($_POST["tg"])) echo $_POST["tg"] ?>""></td>
				</tr>
				<tr>
					<td>Từ thay thế: </td>
					<td><input type="text" name="ttt" value="<?php if(isset($_POST["ttt"])) echo $_POST["ttt"] ?>""></td>
				</tr>
				<tr>
					<td><input type="submit" name="submit" value="Submit"></td>
				</tr>
				<tr>
					<td>Kết quả: </td>
					<td><input type="text" name="kq" value="<?php echo $kq ?>"></td>
				</tr>
			</table>
		</div>
	</center>
</form>
