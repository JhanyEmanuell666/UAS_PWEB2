<?php
include "koneksi.php";
$query_id = mysqli_query($db, "SELECT max(Nomor) as idTerbesar FROM data_penerima");
$dt = mysqli_fetch_array($query_id);
$Id = $dt['idTerbesar'];
$urutan = (int) substr($Id, 0);
$urutan++;
$hasil_id = sprintf($urutan);

$nama = $_POST['nama'];
$alok = $_POST['alokasi'];
$trans = $_POST['jlhTrans'];
$dana = $_POST['jlhDana'];
$tlp = $_POST['telp'];
$email = $_POST['email'];

$query = "INSERT INTO data_penerima(Nomor,Nama_Lengkap,Alokasi,Jumlah_Transaksi,Jumlah_Dana,No_Telp,Email)VALUES('$hasil_id','$nama','$alok','$trans','$dana','$tlp','$email')";
$result = mysqli_query($db, $query);
if ($result) {
    echo "<h3 align=center>Berhasil Menyimpan Data</h3>";
    include "form_tampil.php";
} else {
    echo "<h2 align=center>Proses penambahan data tidak berhasil</h2>";
    include "index.php";
}
