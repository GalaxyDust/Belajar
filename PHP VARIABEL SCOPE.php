<!DOCTYPE html>
<html>
<head>
	<title>PHP VARIABEL SCOPE</title>
</head>
<body>
	<h3>Ini adalah halaman ketiga phpku</h3>
		<?php
		 	function coba(){
		 	// menggunakan Z diluar fungsi maka fungsi ini akan error
		 		$z = 02; //local scope
		 		echo "variabel z didalam fungsi adalah: $z <br>";
		 	}
		 	coba();	
			
			// atau
		 	
		 	$v = 10; // global scope
			function coba2(){
				echo "variabel v didalam fungsi adalah: $v <br>";
			}
			//menggunakan v didalam fungsi maka fungsi ini akan error
			coba2();

				
		?>
</body>
</html>