<?php
	session_start();
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>		
		<?php
		echo "JSON:<br>";
			$xx=array(
				"A"=>"1",
				"B"=>"2",
				"C"=>array(1,2,3,4,5)
			);
			print_r($xx);
			echo "<br>";
			echo $xx."<br>";
			//編碼
			echo json_encode($xx);
			echo "<br>\n";
			//解碼，沒加true為物件格式，不是陣列格式
			$nx = json_decode('{"A":"1","B":"2","C":[1,2,3,4,5]}', true);
			print_r($nx);
		?>
		<br>===================================================<br>
		<!--因為&會拆開，必須編碼再傳-->
		<a href="?action=?aa=10&bb=20">Link</a><br>
		<a href="?action=<?php echo urlencode("?aa=10&bb=20"); ?>">Link(使用urlencode)</a><br>
		<?php
			print_r($_GET);
			echo "<br><br>";
			echo "urldecode:<br>";
			echo urldecode("%3Faa%3D10%26bb%3D20");
			echo "<br>";
		?>
		<br>===================================================<br>
		<?php
			echo "密碼加密 md5:<br>";
			echo md5("123");
		?>
	</body>
</html>