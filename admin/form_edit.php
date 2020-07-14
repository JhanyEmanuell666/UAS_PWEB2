<?php
include "koneksi.php";

if (!isset($_GET['id'])) {
    header('Location: form_tampil.php');
}

$ID = $_GET['id'];
$perintah = mysqli_query($db, "SELECT * FROM data_penerima WHERE Nomor ='$ID'");
$row = mysqli_fetch_assoc($perintah);

if (mysqli_num_rows($perintah) < 1) {
    die("data tidak ditemukan...");
}
?>
<html>

<head>
    <title>Admin - Edit Data</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
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
            <form method=post action=proses_edit.php>
                <h4>Edit Data Penerima</h4>
                <input type="hidden" name="id" value="<?php echo "$row[Nomor]" ?>">
                <table width="100%" border="0" cellspacing="10" cellpadding="0">
                    <tr>
                        <td width="15%">Nama Lengkap</td>
                        <td width="2%">:</td>
                        <td width="80%"><input type="text" name="nama" size="30" class="masukan" value=" <?php echo "$row[Nama_Lengkap]" ?>"></td>
                    </tr>
                    <tr>
                        <td>Alokasi</td>
                        <td>:</td>
                        <td>
                            <?php $alok = $row['Alokasi']; ?>
                            <select name="alokasi">
                                <option <?php echo ($alok == "Alat Pelindung Diri") ? " selected" : "" ?>>Alat Pelindung Diri</option>
                                <option <?php echo ($alok == "Logistik Mahasiswa") ? " selected" : "" ?>>Logistik Mahasiswa</option>
                                <option <?php echo ($alok == "Bantuan Kuota Mahasiswa") ? " selected" : "" ?>>Bantuan Kuota Mahasiswa</option>
                                <option <?php echo ($alok == "Hand Sanitizer") ? " selected" : "" ?>>Hand Sanitizer</option>
                                <option <?php echo ($alok == "Sembako Masyarakat") ? " selected" : "" ?>>Sembako Masyarakat</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Jumlah Transaksi</td>
                        <td>:</td>
                        <td><input type="text" name="jlhTrans" size="30" class="masukan" value=" <?php echo "$row[Jumlah_Transaksi]" ?>"></td>
                    </tr>
                    <tr>
                        <td>Jumlah Dana</td>
                        <td>:</td>
                        <td><input type="text" name="jlhDana" size="30" class="masukan" value=" <?php echo "$row[Jumlah_Dana]" ?>"></td>
                    </tr>
                    <tr>
                        <td>No Telpon</td>
                        <td>:</td>
                        <td><input type="text" name="telp" size="30" class="masukan" value=" <?php echo "$row[No_Telp]" ?>"></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td><input type="text" name="email" size="30" class="masukan" value=" <?php echo "$row[Email]" ?>"></td>
                    </tr>

                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>
                            <input type="submit" name="update" value="Update" class="tombol">
                        </td>
                    </tr>
                </table>
            </form>
        </div>

    </div>
    <div class="copyright">
        Copyright &copy; 2020 <br>
        Pasukan_Hitam<br>
        Universitas Pamulang
    </div>
    </div>

</body>

</html>