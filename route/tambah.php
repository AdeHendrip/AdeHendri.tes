<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<h2>Form Tambah pasien</h2>
<body>
    <div>

    <form action="tmbh.php" method="post">
        <table border="1">
            <tr>
                <td><label for="idpsn">No ID Pasien</label></td>
                <td><input type="text" name="idpsn" id="idpsn"></td>
            </tr>
            <tr>
                <td><label for="nama">Nama Pasien</label></td>
                <td><input type="text" name="nama" id="nama"></td>
            </tr>
            <tr>
                <td><label for="ttl">Tanggal Lahir</label></td>
                <td><input type="date" name="ttl" id="ttl"></td>
            </tr>

        </table>
        <button type="submit">Kirim</button>
    </form>
    </div>    


</body>
</html>