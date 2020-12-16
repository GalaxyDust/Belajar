<?php 
		//array dalam array / multidimensional array

$siswa =[
	["Muhammad Maulana Yusuf", "181910020","IPA 1",
"maulanayusuf12321@gmail.com"],
	
	["Prendi Hermawan", "181910025","IPA 1", "PrendiHermawan9@gmail.com"],
	
	["Muhammad Syafar Fauzan", "181910021", "IPA 1", "fauzanbrt@gmail.com"],
];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dafta Siswa</title>
</head>
<body>
	<h1>Daftar Siswa</h1>
<?php foreach ($siswa as $sw) :?>
		<ul>	
		<li>Nama  :<?=$sw[0];?></li>
		<li>NIS   :<?=$sw[1];?></li>
		<li>Kelas :<?=$sw[2];?></li>
		<li>Email :<?=$sw[3];?></li>
	</ul>
<?php endforeach; ?>
</body>
</html>