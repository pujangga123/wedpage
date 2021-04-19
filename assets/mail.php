<?php
    $nama = $_POST['nama'];
    $hp = $_POST['hp'];
    $banyak = $_POST['banyak'];

    if(mail("pujangga123@gmail.com","KEHADIRAN:".$nama,"$nama,$hp,$banyak")) {
        die("ok");
    } else {
        die("no");
    }
