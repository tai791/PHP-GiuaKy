<?php 
	$PHP1 = array(
		array(
			'MaSV'=>"171C900008",
			'HoTen' => "Nguyễn Thanh Dũng", 
			'DiemTBKT' => 9,
			'DiemThiCK' => 7.5
			),
		array(
			'MaSV'=>"171C900009",
			'HoTen' => "Lê Văn Duy", 
			'DiemTBKT' => 9.5,
			'DiemThiCK' => 8.5
			),
		array(
			'MaSV'=>"171C900010",
			'HoTen' => "Nguyễn Đình Tấn Duy", 
			'DiemTBKT' => 9.5,
			'DiemThiCK' => 9
			),
		);

	echo "Câu a:";
	createtable();
	function createtable()
	{
		global $PHP1;
		echo "<table border='1'> <tr>";
		foreach ($PHP1['0'] as $key => $value)
			echo "<td> $key </td>";
		echo "</tr>";
		foreach ($PHP1 as $key => $value) {
		echo "<tr>";
		foreach ($PHP1[$key] as $key => $value) {
			echo "<td> $value </td>";
		}
		echo "</tr>";
	}

	echo "</table>";
	}
	echo "Câu b:";
	foreach ($PHP1 as $key => $value) {
		$PHP1[$key]["DiemHocPhan"] =  $PHP1[$key]["DiemTBKT"]*0.4 + $PHP1[$key]["DiemThiCK"]*0.6;
	}
	createtable();
	echo "Câu c: ";

	foreach ($PHP1 as $key => $value) {
		$diem = $PHP1[$key]["DiemHocPhan"];
		$PHP1[$key]["XepLoai"] = $diem < 5 ? "Yếu" : ($diem<7 ? "Trung bình" : ($diem<8.5 ? 'Khá' : 'Giỏi'));
 	}
 	createtable();
 	echo "Câu d: <br>";
 	echo "Sinh viên có điểm học phần cao nhất :";
 	$max = $PHP1["0"];
 	foreach ($PHP1 as $key => $value) 
 		if ($max["DiemHocPhan"] < $PHP1[$key]["DiemHocPhan"]) $max=$PHP1[$key];
 	echo "<pre>";
 	print_r($max);
 	echo "</pre>";
 ?>

