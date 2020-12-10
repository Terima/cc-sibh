<?php
require_once("koneksi.php");
$kode = $_GET["judul"];

$stmt = $pdo_conn->prepare("SELECT * FROM berita where judul=:judul");
$stmt->bindParam(':judul', $kode);
$stmt->execute();
$result = $stmt->fetch();
?><html>
<head>
    <link media="all" type="text/css" rel="stylesheet" href="css/cssform.css">
</head>
<body>

<div class="atas">
    <a href="indexadmin.php" style="color:white">Tampil Data</a>
</div>
<h1>Ubah Data Berita</h1>
<form name="frmAdd" action="updateI.php" method="POST" enctype="multipart/form-data">
    <label>Judul: </label><br/>
    <input type="text" name="judul" readonly value="<?php echo $result['judul']; ?>" required /><br/><br/>
    <label>Gambar: </label><br/>
    <input type="file" name="gbr" value="<?php echo $result['gbr']; ?>" required/><br/><br/>
    <label>Isi: </label><br/>
    <textarea name="isi"><?php echo $result['isi']; ?></textarea> <br/><br/>
    <input name="save_record" type="submit" value="Save" class="demo-form-submit">
    
</form>
</body>
</html>