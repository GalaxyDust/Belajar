<?php 
//Array 
//(variabel yang bisa menampung banyak nilai)
// catatan ; dalam array isi data boleh beda
//(pasngan antara key dan value)
//(key adalah index yang dimulai dari 0)

				//cara lama
$hari=array("Senin", "Selasa", "Rabu");

				//cara baru
$bulan=["Januari", "Februari", "Maret"];				

				//menampilkan array
	//var_dump / print_r()
// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";
	
			//menampilkan 1 element pada array
// echo $bulan[0];
// echo "<br>";
// echo $hari[1];

			//menambahkan elemen baru pada array
// var_dump($hari);
// $hari[]="kamis";
// $hari[]="jum'at"
// echo "<br>";
// var_dump($hari);


			//melakukan pengulangan pada array
//for / foreach
$angka=[3,2,4,1,5,12,55,72,88,292];

?>
<!DOCTYPE html>
<html>
<head>
<title>latihan pengulangan pada array</title>
<style >
.kotak{
width: 50px;
height: 50px;
background-color:salmon;
text-align: center;
line-height: 50px;
margin: 3px;
float: left;
}
.clear {clear:both;}
</style>
</head>
<body>
<?php for ($i=0; $i < count($angka); $i++) { ?>

<div class="kotak"><?php echo $angka[$i]; ?></div>
<?php } ?>
<div class="clear"></div>


<?php //atau 
foreach ($angka as $a) {?>
<div class="kotak"><?php echo $a; ?></div>

<?php } ?>
<div class="clear"></div>

<?php //atau 
foreach ($angka as $a) :?>
<div class="kotak"><?php echo $a; ?></div>
<?php endforeach;


?>
</body>
</html>

