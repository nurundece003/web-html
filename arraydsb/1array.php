<?php 
error_reporting(0);

$nrp = array("1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30");
$nama = array("Anindhita Nurul","Nabila Sasikirana","Ninis Hidayat","Caca","Nayla Aquina","Fatih Abdillah","Aulia Feyfitroh","Emilya Mustofa","Bambang Sulis","Hendra Herianto","Aldeo Zidane","Ananda Micola","Bagus Dwi","Benny Pakarti","Rara Kirana","Irma Mustafidah","Halim","Talitha Zafirah","Maulina Uswatun","Euvannisa Jasmin","Christoporus Arya","Adam Fikri","Albertus Christo","Alfian Rizky","Nabila Fitra","Aulia Nidhaul","Ananda Irfan","Muhammad Deo","Ahmad Fahry","Gilang Bodat");
$ipk = array("3.05","3.10","3.015","3.20","3.23");
$rambut = array("Hitam dan Lurus","Hitam dan Ikal");
$bb = array("BB 50kg dan TB 160cm","BB 50kg dan TB 160cm","BB 60kg dan TB 170cm","BB 60kg dan TB 130cm");
$aktif = array("Aktif","Cuti");

echo "<p>===========================================if-else===========================================<p>";
if ($nrp[0] == 1) {
	echo "<p>NRP $nrp[0]<p>";
	echo "<p>Nama : $nama[0]<p>";
	echo "<p>IPK : $ipk[0]<p>";
	echo "<p>Rambut : $rambut[0]<p>";
	echo "<p>BB : $bb[0]<p>";	
	echo "<p>aktif : $aktif[0]<p>";
	$nrp++;

} 

echo "<p>=========================================switch-case=========================================<p>";
$favcolor = "6";

switch ($favcolor) {
	case "6":
	echo "<p>NRP : $nrp[5]<p>";
	echo "<p>Nama : $nama[5]<p>";
	echo "<p>IPK : $ipk[2]<p>";
	echo "<p>Rambut : $rambut[1]<p>";
	echo "<p>BB : $bb[1]<p>";	
	echo "<p>aktif : $aktif[0]<p>";
	$favcolor++;
	break;
}

echo "<p>===========================================do-while===========================================<p>";

$nrpdo = 11;

do {
	echo "<p>NRP $nrp[$nrpdo]<p>";
	echo "<p>Nama : $nama[$nrpdo]<p>";
	echo "<p>IPK : $ipk[2]<p>";
	echo "<p>Rambut : $rambut[1]<p>";
	echo "<p>BB : $bb[1]<p>";	
	echo "<p>aktif : $aktif[0]<p>";
	echo "<p>********************************************<p>";
	$nrpdo++;
} while ($nrpdo <= 15);

echo "<p>===========================================foreach===========================================<p>";


for ($nrploop=15;$nrploop<20;$nrploop++){
	echo "<p>NRP : $nrp[$nrploop]<p>";
	echo "<p>Nama : $nama[$nrploop]<p>";
	echo "<p>IPK : $ipk[2]<p>";
	echo "<p>Rambut : $rambut[1]<p>";
	echo "<p>BB : $bb[1]<p>";	
	echo "<p>aktif : $aktif[0]<p>";
	echo "<p>********************************************<p>";

}
echo "<p>============================================while============================================<p>";


$nrpwhile = 20;

while($nrpwhile <30) {
	echo "<p>NRP : $nrp[$nrpwhile]<p>";
	echo "<p>Nama : $nama[$nrpwhile]<p>";
	echo "<p>IPK : $ipk[2]<p>";
	echo "<p>Rambut : $rambut[1]<p>";
	echo "<p>BB : $bb[1]<p>";	
	echo "<p>aktif : $aktif[0]<p>";
	echo "<p>********************************************<p>";
	$nrpwhile++;
	
	
}
?>