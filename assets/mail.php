<?php
    $nama = $_POST['nama'];
    $hp = $_POST['hp'];

    if(mail("pujangga123@gmail.com","KEHADIRAN:".$nama,"$nama,$hp")) {
        die("ok");
    } else {
        die("no");
    }
