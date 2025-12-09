<?php

include 'koneksi.php';

$idpsn = $_GET['idpsn'];

mysqli_query($db, "delete from tbpasien where idpsn='$idpsn'");

header("location:home.php");