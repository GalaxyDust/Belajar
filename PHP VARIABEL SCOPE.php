<!DOCTYPE html>
<html>
<head>
	<title>PHP VARIABEL SCOPE</title>
</head>
<body>
	<h3>Ini adalah halaman ketiga phpku</h3>
		<?php //Global dan local
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
			<?php //Global Keyword
			$x = 2;
			$y = 4;
				function coba(){
					global $x,$y;
					$x = $x + $y;
				}
				coba();
				echo $x;
			?>
				<?php // static 
					function coba(){
						static $x = 2;
						echo $x;
						$x++;
					}
					coba();
					echo "<br>";
					coba();
					echo "<br>";
					coba();
				?>
</body>
</html>