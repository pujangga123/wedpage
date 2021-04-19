<?php
    $nama = $_POST['nama'];
    $hp = $_POST['hp'];
    $banyak = $_POST['banyak'];

	$f = fopen("daftar.txt","a+");
	fwrite($f,"$nama,$hp,$banyak\n");
	fclose($f);

	echo "ok";
	