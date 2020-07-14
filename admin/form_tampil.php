<html>

<head>
    <title>Data Penerima Bantuan Covid</title>
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
            <h3 align="center">Data Penerima Bantuan Covid19</h3>
            <br>
            <nav align="right">
                <a href="proses_cetak.php" target="_blank">Print</a>
            </nav>
            <br>
            <table border="1" cellspacing="0" align="center">
                <thead>
                    <tr>
                        <th width="30px">Nomor</th>
                        <th width="200px">Nama Lengkap</th>
                        <th width="210px">Alokasi</th>
                        <th width="120px">Jumlah Transaksi</th>
                        <th width="120px">Jumlah Dana</th>
                        <th width="150px">No Telpon</th>
                        <th width="150px">Email</th>
                        <th width="100px">Tindakan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $ambildata = mysqli_query($db, "SELECT * FROM data_penerima");
                    while ($a = mysqli_fetch_array($ambildata)) { ?>
                        <tr align="center">
                            <td><?php echo $a['Nomor']; ?></td>
                            <td><?php echo $a['Nama_Lengkap']; ?></td>
                            <td><?php echo $a['Alokasi']; ?></td>
                            <td><?php echo $a['Jumlah_Transaksi']; ?></td>
                            <td align="left"><?php echo "Rp - ", $a['Jumlah_Dana']; ?></td>
                            <td><?php echo $a['No_Telp']; ?></td>
                            <td><?php echo $a['Email']; ?></td>
                            <td>
                                <?php echo "<a href='form_edit.php?id=" . $a[0] . "'>Edit</a> | ";
                                echo "<a href='proses_hapus.php?id=" . $a[0] . "'>Hapus</a>"; ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table> <br><br><br>
        </div>
        <div class="copyright">
            Copyright &copy; 2020 <br>
            Pasukan_Hitam<br>
            Universitas Pamulang
        </div>
    </div>

</body>

</html>