<!DOCTYPE html>
<html>

<head>
    <title>Input Data Penerima</title>
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
            <form method=post action=proses_input.php>
                <h4>Input Data Penerima</h4>
                <table width="100%" border="0" cellspacing="10" cellpadding="0">
                    <tr>
                        <td width="15%">Nama Lengkap</td>
                        <td width="2%">:</td>
                        <td width="80%"><input type="text" name="nama" size="30" class="masukan"></td>
                    </tr>
                    <tr>
                        <td>Alokasi</td>
                        <td>:</td>
                        <td>
                            <select name="alokasi">
                                <option value="pilih">Alokasi</option>
                                <option value="Alat Pelindung Diri">Alat Pelindung Diri</option>
                                <option value="Logistik Mahasiswa">Logistik Mahasiswa</option>
                                <option value="Bantuan Kuota Mahasiswa">Bantuan Kuota Mahasiswa</option>
                                <option value="Hand Sanitizer">Hand Sanitizer</option>
                                <option value="Sembako Masyarakat">Sembako Masyarakat</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Jumlah Transaksi</td>
                        <td>:</td>
                        <td><input type="text" name="jlhTrans" size="30" class="masukan"></td>
                    </tr>
                    <tr>
                        <td>Jumlah Dana</td>
                        <td>:</td>
                        <td><input type="text" name="jlhDana" size="30" class="masukan"></td>
                    </tr>
                    <tr>
                        <td>No Telpon</td>
                        <td>:</td>
                        <td><input type="text" name="telp" size="30" class="masukan"></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td><input type="text" name="email" size="30" class="masukan"></td>
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
                            <input type="submit" name="Submit" value="Simpan" class="tombol">
                            <input type="reset" name="batal" value="Reset" class="tombol">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
        <div class="copyright">
            Copyright &copy; 2020 <br>
            Pasukan_Hitam<br>
            Universitas Pamulang
        </div>

    </div>
</body>

</html>