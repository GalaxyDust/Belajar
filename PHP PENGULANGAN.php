<!-- <?php 
// for
// while
// do..while
// foreach = pengulangan array

// for ($i=0; $i < 2; $i++) { 
// 	echo "Assalamualaikum <br>";
// }
	
	// $i=0;
	// while ( $i<2) {
	// 	echo "Assalamualaikum <br>";
	// $i++;
	// }	


		// $i=0;
		// do {
		// 	echo "Assalamualaikum <br>";
		// $i++;
		// } while ($i<2);
?> -->
<!DOCTYPE html>
<html>
<head>
	<title>Latihan 1</title>
	<style>
		.warna-baris {
			background-color:silcer;
		}
	</style>
</head>
<body>

<table border="1" cellpadding="10" cellspacing="0">
	<?php for ($i=1; $i <=5; $i++) : ?>
		<?php if ($i%2==1) : ?>
		<tr>
			<?php else; ?>
		<?php endif; ?>
			<?php for ($j=1; $j <=5; $j++) : ?>
				<td><?= "$i,$j"; ?></td>
			<?php endfor; ?>
		</tr>
	<?php endfor; ?>
</table>

</body>
</html>