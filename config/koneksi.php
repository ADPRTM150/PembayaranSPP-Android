<?php
//variabel koneksi
$koneksi = mysqli_connect("localhost","root","","sppsekolah");

if(!$koneksi){
	echo "Koneksi Database Gagal...!!!";
}
?>