<?php
    $username = $_POST['username'];
    $password = $_POST['password'];
?>

<html>
    <head>
        <title>Form</title>
        <style>
            input { 
                width: 100%;
            }

            button {
                width: 100%;
            }

            #password {
                display: none;
            }
        </style>
    </head>
    <body>
        <table>
            <tr>
                <th>Selamat Datang</th>
                <td><?php echo $username ?></td>
            </tr>
            <tr>
                <td><p id="password"><?php echo $password ?></td>
                <td><button onclick="myFunction()">Lihat Password</button></td>
            </tr>
        </table>
        <form method="post" action="data.php" style="margin-top: 30px !important;">
            <table>
                <tr>
                    <th colspan="3">Data KTM</th>
                </tr>
                <tr>
                    <td>NIM</td>
                    <td colspan="2"><input type="number" name="nim"></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td colspan="2"><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>Tempat, Tanggal Lahir</td>
                    <td><input type="text" name="tmp"></td>
                    <td><input type="date" name="tgl"></td>
                </tr>
                <tr>
                    <td>Fakultas</td>
                    <td colspan="2"><input type="text" name="fakultas"></td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td colspan="2"><input type="text" name="jurusan"></td>
                </tr>
                <tr>
                    <td colspan="3">
                        <button type="submit">Submit</button>
                    </td>
                </tr>
            </table>
        </form>

        <script>
            function myFunction() {
                var x = document.getElementById("password");
                if (x.style.display == "block") {
                    x.style.display = "none";
                } else {
                    x.style.display = "block";
                }
            }
        </script>
    </body>
</html>