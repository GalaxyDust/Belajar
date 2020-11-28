<!DOCTYPE html>
<html>
<head>
	<title>ini halaman php kelimaku</title>
</head>
<body>
	<?php //strlen() berapa huruf
		echo strlen("Maulana Yusuf");
	?>
		<?php //str_word_count() berapa kalimat
			echo str_word_count("Maulana Yusuf");
		?>
			<?php //strrev() ngebalikin huruf
				echo strrev("Maualan Yusuf");
			?>
				<?php //str_replace() yang sama akan ilang
					echo str_replace("yusuf","Asep","Maulana Yusuf");
				?>

</body>
</html>