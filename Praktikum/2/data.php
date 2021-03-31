<?php
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $tmp = $_POST['tmp'];
    $tgl = $_POST['tgl'];
    $fakultas = $_POST['fakultas'];
    $jurusan = $_POST['jurusan'];
?>

<html>
    <head>
        <title>Data</title>
        <style>
            .md5 {
                width: 300px;
            }

            table, th, td {
                border: 1px solid black;
                border-collapse: collapse;
            }
        </style>
    </head>
    <body>
        <table>
            <tr>
                <th colspan="3">Data KTM</th>
            </tr>
            <tr>
                <td class="md5">NIM</td>
                <td><?php echo $nim ?></td>
            </tr>
            <tr>
                <td class="md5">Nama</td>
                <td><?php echo $nama ?></td>
            </tr>
            <tr>
                <td class="md5">Tempat, Tanggal Lahir</td>
                <td><?php echo $tmp . $tgl ?></td>
            </tr>
            <tr>
                <td class="md5">Fakultas</td>
                <td><?php echo $fakultas ?></td>
            </tr>
            <tr>
                <td class="md5">Jurusan</td>
                <td><?php echo $jurusan ?></td>
            </tr>
        </table>  
    </body>
</html>