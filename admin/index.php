<!DOCTYPE html>
<html>

<head>
    <title>Admin - Home</title>
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
                <img src="images/logo.jpg" height="150">
            </nav>
            <p align="center">
                Website ini merupakan tugas pengganti UAS Pemrograman Web 2 <br>
                Oleh Kelompok 3 Kelas 06TPLM006 Universitas Pamulang <br>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Natus, omnis porro autem quidem tempora quas placeat perferendis. <br>
                Natus quibusdam voluptate itaque esse eligendi, quo adipisci modi animi nam repellat doloremque.
                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Quidem quisquam ducimus ipsam commodi pariatur,aspernatur eveniet iusto nisi voluptatem
                itaque sapiente blanditiis adipisci dolorem mollitia aliquam officia impedit neque? <br>
            </p>
        </div>
        <div class="copyright">
            Copyright &copy; 2020 <br>
            Pasukan_Hitam<br>
            Universitas Pamulang
        </div>
    </div>

</body>

</html>