<?php
include "koneksi.php";
if (isset($_POST['update'])) {
    $Nmr = $_POST['id'];
    $nama = $_POST['nama'];
    $alok = $_POST['alokasi'];
    $trans = $_POST['jlhTrans'];
    $dana = $_POST['jlhDana'];
    $tlp = $_POST['telp'];
    $email = $_POST['email'];

    $sql = "UPDATE data_penerima SET Nama_Lengkap='$nama', Alokasi='$alok', Jumlah_Transaksi='$trans', Jumlah_Dana='$dana', No_Telp='$tlp', Email='$email' WHERE Nomor='$Nmr'";
    $query = mysqli_query($db, $sql);
    if ($query) {
        header('Location: form_tampil.php');
    } else {
        die("Gagal Mengupdate");
    }
} else {
    die("Akses dilarang...");
}
