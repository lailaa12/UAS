<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Data Mahasiswa</title>
    </head>

    <body>
        <h3>Data-Data Mahasiswa yang berhasil di Simpan</h3>
        <a href="index.php">Tambah Data Mahasiswa</a>
        <table border="1" cellspacing="0" width="50%">
            <tr>mayan
                <th>No.</th>
                <th>NPM</th>
                <th>Nama</th>
                <th>TTL</th>
                <th>Alamat</th>
                <th>Prodi</th>
            </tr>
            <?php
        include "koneksi.php";
        $No = 1;
        $sqlMhs = mysqli_query($connect, "SELECT * FROM Data_mahasiswa ORDER BY NPM ASC");
        while ($a = mysqli_fetch_array($sqlMhs)) {
            echo "<tr>
                            <td align='center'>$No</td>
                            <td>$a[npm]</td>
                            <td>$a[nama]</td>
                            <td align='center'>$a[jk]</td>
                            <td>$a[prodi]</td>
                            <td>$a[alamat]</td>
                            <td align='center'>
                                <a href='edit_mhs.php?npm=$a[npm]'>Edit</a> | 
                                <a href='hapus_mhs.php?npm=$a[npm]'>Hapus</a>
                            </td>
                        </tr>";
            $No++;
        }
        ?>
        </table>
    </body>

