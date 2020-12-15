<?php
require_once("koneksi.php");
$kode = $_GET["nama_barang"];

$stmt = $pdo_conn->prepare("SELECT * FROM barang_temuan where nama_barang=:nama_barang");
$stmt->bindParam(':nama_barang', $kode);
$stmt->execute();
$result = $stmt->fetch();
?>
<html>
    <head>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <link media="all" type="text/css" rel="stylesheet" href="css/cssform.css">
    </head>
<body>
    
    <div class="atas">
        <a href="indexadmin.php"><i class="fas fa-home"> Beranda</i></a>
    </div>
<h1>Ubah Data Barang Temuan</h1>
<form name="frmAdd" action="updateT.php" method="POST" enctype="multipart/form-data">
    <label>Nama Barang: </label>
    <input type="text" name="nama_barang" readonly value="<?php echo $result['nama_barang']; ?>" required /><br/><br/>
    <label>penemu: </label><br/>
    <input type="text" name="penemu" value="<?php echo $result['penemu']; ?>" required /><br/><br/>
    <label>Kontak penemu: </label><br/>
    <input type="text" name="kontak_penemu" value="<?php echo $result['kontak_penemu']; ?>" required /><br/><br/>
    <label>Tanggal: </label><br/>
    <input type="date" name="tanggal" value="<?php echo $result['tanggal']; ?>" required /><br/><br/>
    <label>Gambar: </label><br/>
    <input type="file" name="gbr" value="<?php echo $result['gbr']; ?>" required/><br/><br/>
    <label>Deskripsi: </label><br/>
    <textarea name="deskripsi"><?php echo $result['deskripsi']; ?></textarea> <br/><br/>
    <button type="submit"> Save </button>

    
</form>

</body>
</html>