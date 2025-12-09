<?php

include 'koneksi.php';

$idpsn = $_POST['idpsn'];
$nama = $_POST['nama'];
$ttl = $_POST['ttl'];

mysqli_query($db, "insert into tbpasien values('$idpsn', '$nama', '$ttl')");

header("location:home.php");