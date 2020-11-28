<!DOCTYPE html>
<html>
<head>
	<title>ini adalah halaman php keenamku</title>
</head>
<body>
	<?php //mencek ini integer atau bukan dan alias dari integer dan long adalah is_int()
	$x = 123;
		var_dump(is_int($x));
	$x = 12.3;
		var_dump(is_int($x));
	?>
		<?php //mencek ini float atau bukan dan alias dari float dan doubel adalah is_float()
		$y = 12.3;
			var_dump(is_float($y));
		?>
			<?php //mencek ini infinity atau bukan is_finite(,is_infinite()
			$x = 123a4;
			var_dump($x);
			?>
				<?php //membuat float atau string menjadi integet
					$x = 123.45
					$int_cast = (int)$x;
					echo $int_cast"<br>";
				?>
				


</body>
</html>