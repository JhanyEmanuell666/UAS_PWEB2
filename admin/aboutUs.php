<!DOCTYPE html>
<html>

<head>
    <title>About Us</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <?php include "koneksi.php"; ?>
    <div class="content">
        <header>
            <h1 class="judul">Penerimaan Bantuan Sosial Covid19</h1>
            <h5 class="logout"><a href="logout.php">Logout</a></h5>
        </header>
        <div class="menu">
            <ul>
                <li>
                    <a href="aboutUs.php">Tentang Kami</a>
                </li>
                <li>
                    <a href="form_tampil.php">Daftar Penerima</a>
                </li>
                <li>
                    <a href="form_input.php">Input Data Penerima</a>
                </li>
                <li>
                    <a href="index.php">Home</a>
                </li>
            </ul>
        </div>
        <div id="isi">
            <nav align="center">
                <img src="images/ico2.png" height="150">
            </nav>
            <h3 align="center">Anggota Kelompok 3</h3>
            <table border="1" cellspacing="0" align="center">
                <thead>
                    <tr>
                        <th width="50px">NIM</th>
                        <th width="300px">Nama Lengkap</th>
                        <th width="200px">Jenis Kelamin</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $ambildata = mysqli_query($db, "SELECT * FROM anggota_kelompok ORDER BY NIM DESC");
                    while ($a = mysqli_fetch_array($ambildata)) { ?>
                        <tr align="center">
                            <td><?php echo $a['NIM']; ?></td>
                            <td><?php echo $a['Nama_Lengkap']; ?></td>
                            <td><?php echo $a['Jenis_Kelamin']; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="copyright">
            Copyright &copy; 2020 <br>
            Pasukan_Hitam<br>
            Universitas Pamulang
        </div>
    </div>

</body>

</html>