<?php
require_once("koneksi.php");
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet">

    <title>Sistem Informasi Barang Hilang Fakultas Teknik Banjarmasin</title>
<!--
Elegance Template
https://templatemo.com/tm-528-elegance
-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">

    <link rel="stylesheet" type="text/css" href="css/fullpage.min.css">

    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">

    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/templatemo-style.css">

    <link rel="stylesheet" href="css/responsive.css">
    
    <link rel="stylesheet" href="css/table admin.css">

    <link rel="icon" type="image/png" sizes="32x32" href="images/logo ulm.png"> 

    </head>
<body>
    <div id="video">
        <div class="preloader">
            <div class="preloader-bounce">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <header id="header">
            <div class="container-fluid">
                <div class="navbar">
                    <form method="post" action="index.php"> 
                    <input type ="image" id="logo" alt="logout" src="images/logo sistem.png">
                    </form>
                    <div class="navigation-row">
                        <nav id="navigation">
                            <button type="button" class="navbar-toggle"> <i class="fa fa-bars"></i> </button>
                            <div class="nav-box navbar-collapse">
                                <ul class="navigation-menu nav navbar-nav navbars" id="nav">
                                    <li data-menuanchor="slide01" class="active"><a href="#slide01">Beranda</a></li>
                                    <li data-menuanchor="slide02"><a href="#slide02">Berita</a></li>
                                    <li data-menuanchor="slide03"><a href="#slide03">Barang Hilang</a></li>
                                    <li data-menuanchor="slide04"><a href="#slide04">Barang Temuan</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>

        <video autoplay muted loop id="myVideo">
          <source src="images/video-bg.mp4" type="video/mp4">
        </video>

        <div id="fullpage" class="fullpage-default">

 <div class="section animated-row" data-section="slide01">
    <div class="section-inner">
        <div class="welcome-box">
            <h1 class="welcome-title animate" data-animate="fadeInUp">Selamat Datang</h1>
            <span class="welcome-first animate" data-animate="fadeInUp">Sistem Informasi Barang Hilang Fakultas Teknik Banjarmasin</span>
            <div class="scroll-down next-section animate data-animate="fadeInUp"><img src="images/mouse-scroll.png" alt=""><span>Scroll Down</span></div>
        </div>
    </div>
</div>


    <div class="section animated-row" data-section="slide02">
                <div class="section-inner">
                    <div class="row justify-content-center">
                        <div class="col-md-8 wide-col-laptop">
                            <div class="title-block animate" data-animate="fadeInUp">
                                <h2>Informasi</h2>
                                <a href="formI.html">Tambah Berita dan Himbauan</a>
                            </div>
                                    <?php
$stmt = $pdo_conn->prepare("SELECT * FROM berita ORDER BY id DESC");
$stmt->execute();
$result = $stmt->fetchAll();
?>
<div id="tableberita">
<table>
<thead>
    <tr>
    <th>Judul</th>
    <th>Isi Konten</th>
    <th>Aksi</th>
    </tr>
</thead>
<tbody>
<?php
if(!empty($result)) { 
foreach($result as $row) {
?>
    <tr>
        <td><?php echo $row["judul"]; ?></td>
       
        <td><?php echo "<img src='images/$row[gambar]'/>";?> <br>
        <?php echo $row["isi"]; ?></td>
<td>
        <a href='editI.php?judul=<?php echo $row['judul']; ?>'>edit berita</a>
        <a href='hapusI.php?id=<?php echo $row['id']; ?>'onclick ="return confirm('Anda yakin ingin menghapus')">hapus</a>
        </td>
    </tr>
<?php
}
}
?>
</tbody>
</table>
</div>        

                            </div>
                        </div>
                    </div>
                </div>



            <div class="section animated-row" data-section="slide03">
                <div class="section-inner">
                    <div class="row justify-content-center">
                        <div class="col-md-8 wide-col-laptop">
                            <div class="title-block animate" data-animate="fadeInUp">
                                <h2>Barang Hilang</h2>
                                <a href="form.php">Tambah barang hilang</a>
                            </div>
            <?php
$stmt = $pdo_conn->prepare("SELECT * FROM barang_hilang ORDER BY id DESC");
$stmt->execute();
$result = $stmt->fetchAll();
?>
<div id="tabledata">
<table border="1">
<thead>
    <tr>
    <th>Nama Barang</th>
    <th>Pemilik</th>
    <th>Kontak Pemilik</th>
    <th>Tanggal</th>
    <th>Gambar</th>
    <th>Deskripsi</th>
    <th>Aksi</th>
    </tr>
</thead>
<tbody>
<?php
if(!empty($result)) { 
foreach($result as $row) {
?>
    <tr>
        <td><?php echo $row["nama_barang"]; ?></td>
        <td><?php echo $row["pemilik"]; ?></td>
        <td><?php echo $row["kontak_pemilik"]; ?></td>
        <td><?php echo $row["tanggal"]; ?></td>
        <td> <?php echo "<img src='images/$row[gambar]'/>";?> </td>
        <td><?php echo $row["deskripsi"]; ?></td>
        <td>
        <a href='edit.php?nama_barang=<?php echo $row['nama_barang']; ?>'>edit</a>
        <a href='hapus.php?id=<?php echo $row['id']; ?>'onclick ="return confirm('Anda yakin ingin menghapus')">hapus</a>
        </td>
    </tr>
<?php
}
}
?>
</tbody>
</table>                
</div>
                                </div>
                            </div>
                        </div>

            <div class="section animated-row" data-section="slide04">
                <div class="section-inner">
                    <div class="row justify-content-center">
                        <div class="col-md-8 wide-col-laptop">
                            <div class="title-block animate" data-animate="fadeInUp">
                                <h2>Barang Temuan</h2>
                                <a href="formT.html">Tambah barang temuan</a>
                            </div>
                                <?php
$stmt = $pdo_conn->prepare("SELECT * FROM barang_temuan ORDER BY id DESC");
$stmt->execute();
$result = $stmt->fetchAll();
?>
<div id="tabledata">
<table border="1">
<thead>
    <tr>
    <th>Nama Barang</th>
    <th>Penemu</th>
    <th>Kontak Penemu</th>
    <th>Tanggal</th>
    <th>Gambar</th>
    <th>Deskripsi</th>
    <th>Aksi</th>
    </tr>
</thead>
<tbody>
<?php
if(!empty($result)) { 
foreach($result as $row) {
?>
    <tr>
        <td><?php echo $row["nama_barang"]; ?></td>
        <td><?php echo $row["penemu"]; ?></td>
        <td><?php echo $row["kontak_penemu"]; ?></td>
        <td><?php echo $row["tanggal"]; ?></td>
        <td><?php echo "<img src='images/$row[gambar]'/>";?></td>
        <td><?php echo $row["deskripsi"]; ?></td>
        <td>
        <a href='editT.php?nama_barang=<?php echo $row['nama_barang']; ?>'>edit</a>
        <a href='hapusT.php?id=<?php echo $row['id']; ?>'onclick ="return confirm('Anda yakin ingin menghapus')">hapus</a>
        </td>
    </tr>
<?php
}
}
?>
</tbody>
</table>
</div>
                                </div>
                            </div>
                        </div>
                    </div>

        

    <script src="js/jquery.js"></script>

    <script src="js/bootstrap.min.js"></script>

    <script src="js/fullpage.min.js"></script>

    <script src="js/scrolloverflow.js"></script>

    <script src="js/owl.carousel.min.js"></script>

    <script src="js/jquery.inview.min.js"></script>

    <script src="js/form.js"></script>

    <script src="js/custom.js"></script>
  </body>
</html>


