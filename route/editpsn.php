<?php

include 'koneksi.php';

$idpsn = $_POST['idpsn'];
$nama = $_POST['nama'];
$ttl = $_POST['ttl'];

mysqli_query($db, "update tbpasien set idpsn='$idpsn', nama='$nama', ttl='$ttl' where idpsn='$idpsn'");

header("location:home.php");