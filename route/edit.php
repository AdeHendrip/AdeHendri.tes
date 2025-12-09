<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman edit Data</title>
</head>
<h2>Ubah data pasien</h2>
<body>

<div>
    <?php
    include 'koneksi.php';
    $idpsn = $_GET['idpsn'];

    $data = mysqli_query ($db, "SELECT * FROM tbpasien WHERE idpsn='$idpsn'");
    while ($d = mysqli_fetch_array($data)) {
    ?>

        <form action="editpsn.php" method="post">
            <table border="1">
                <tr>
                    <td><label for="idpsn">No ID Pasien</label></td>
                    <td><input type="text" id="idpsn" name="idpsn" value="<?php echo $d['idpsn']; ?>"></td>
                </tr>
                <tr>
                    <td><label for="nama"> Ubah Nama Pasien</label></td>
                    <td><input type="text" name="nama" id="nama" value="<?php echo $d['nama'] ?>"></td>
                </tr>
                <tr>
                    <td><label for="ttl">Ubah Tanggal Lahir</label></td>
                    <td><input type="date" name="ttl" id="ttl" value="<?php echo $d['ttl']; ?>"></td>
                </tr>
            </table>
            <button type="submit">Kirim</button>
        </form>

    <?php
    }



    ?>
</div>
    
</body>
</html>