<?php 
$nrp = array("1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30");

$nama = array("Anindhita Nurul","Nabila Sasikirana","Ninis Hidayat","Caca","Nayla Aquina","Fatih Abdillah","Aulia Feyfitroh","Emilya Mustofa","Bambang Sulis","Hendra Herianto","Aldeo Zidane","Ananda Micola","Bagus Dwi","Benny Pakarti","Rara Kirana","Irma Mustafidah","Halim","Talitha Zafirah","Maulina Uswatun","Euvannisa Jasmin","Christoporus Arya","Adam Fikri","Albertus Christo","Alfian Rizky","Nabila Fitra","Aulia Nidhaul","Ananda Irfan","Muhammad Deo","Ahmad Fahry","Gilang Bodat");asort($nama);
$dosen =  array("Desy Intan Permatasari");
$kelas=array("D4-A","D4-B" );
$nilai= array("A");
$aktif = array("HIMTI");
function Tampil($nrp,$nama,$dosen,$kelas,$nilai,$aktif){
	for ($i=0; $i <15 ; $i++) {
	echo "<p>user $nrp[$i]<p>";	
	echo "<p>namaMhs :	$nama[$i]<p>";
	echo "<p>namaKelasMhs	: $kelas[0]<p>";
	echo "<p>namaDosen	: $dosen[0]<p>";
	echo "<p>nilai :	 $nilai[0]<p>";
	echo "<p>Mahasiswa Aktif Dihimti :	$aktif[0]  <p>";
	echo "<hr>";


}
	for ($q=15; $q <30 ; $q++) {
	echo "<p>user $nrp[$q]<p>";	
	echo "<p>namaMhs :	$nama[$q]<p>";
	echo "<p>namaKelasMhs	: $kelas[1]<p>";
	echo "<p>namaDosen	: $dosen[0]<p>";
	echo "<p>nilai :	 $nilai[0]<p>";
	echo "<p>Mahasiswa Aktif Dihimti :	$aktif[0]  <p>";
	echo "<hr>";


}
	
}
Tampil($nrp,$nama,$dosen,$kelas,$nilai,$aktif);


 ?>