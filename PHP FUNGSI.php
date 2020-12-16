<?php 
			// build-int function contohnya
	//date dan time//
//date (menampilkan tanggal dengan format tertentu)
	//echo date("l, d-M-Y");

//time(detik yang sudah berlalu sejak 1 januari 1970)
	//echo time("l",time()+60*60*24*50);

//mktime(membuat detik sendiri)
//mktime(0,0,0,0,0,0)
//jam,menit,detik,bulan,tanggal,tahun
	//echo date("l",mktime(0,0,0,10,2,2002));

//strtotime(masukin format tanggal)
	//echo date("l",strtotime("2 okt 2002"));

			//user-defined function contohnya

function salam($waktu = "Datang",$nama = "Admin"){
	return "selamat $waktu,$nama!";
}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>latihan function</title>
 </head>
 <body>
 	<h1><?= salam("Subuh", "Maulana"); ?></h1>
 </body>
 </html>