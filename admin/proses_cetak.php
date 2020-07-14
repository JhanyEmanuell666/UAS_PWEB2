<html>

<head>
    <title>Print Data Penerima</title>
</head>

<body>
    <?php
    include "koneksi.php";
    ?>
    <div id="isi">
        <h3 align="center">Rekapitulasi Penerimaan Bantuan Sosial COVID-19 <br>
            Sampai dengan hari ini <br>
            <?php
            echo date('d M Y');
            date_default_timezone_set('Asia/jakarta');
            echo " , Pukul : ";
            echo date('H:i');
            echo " WIB";
            ?>
        </h3><br>
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
                    </tr>
                <?php } ?>
            </tbody>
        </table> <br><br>
    </div>
    <script>
        window.print();
    </script>
</body>

</html>