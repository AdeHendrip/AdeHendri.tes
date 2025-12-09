<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tabel</title>
</head>
<h2>Tabel pasien</h2>
<body>
    <div>
        <table border="1">
            <tr>
                <th>ID Pasien</th>
                <th>Nama Pasien</th>
                <th>Tanggal Lahir</th>
                <th>Hapus Data</th>
                <th>Ubah Data</th>
            </tr>

            <?php
            include 'koneksi.php';

            $data = mysqli_query($db, 'select * from tbpasien');
            while ($d = mysqli_fetch_array($data)) {
                ?>

                <tr>
                    <td><?php echo $d ['idpsn']; ?></td>
                    <td><?php echo $d ['nama']; ?></td>
                    <td><?php echo $d ['ttl'] ?></td>
                    <td><a href="hapus.php?idpsn=<?php echo $d ['idpsn']; ?>">
                        <button>Hapus</button>
                    </a></td>
                    <td><a href="edit.php?idpsn=<?php echo $d ['idpsn']; ?>">
                        <button>Edit Data</button>
                    </a></td>
                </tr>

                <?php
            }

            ?>

        </table>
        <a href="tambah.php"><button>Tambah Pasien</button></a>
    </div>
    
</body>
</html>