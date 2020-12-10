<?php
require_once("koneksi.php");
$nama = $_FILES['gbr']['name'];
$file_tmp = $_FILES['gbr']['tmp_name'];
$folder = './images/';

$cek = move_uploaded_file($file_tmp, $folder.$nama);

$nama_barang = $_POST["nama_barang"];
$penemu = $_POST["penemu"];
$kontak_penemu = $_POST["kontak_penemu"];
$tanggal = $_POST["tanggal"];
$gambar = $nama;
$deskripsi = $_POST["deskripsi"];




if($cek){
$stmt=$pdo_conn->prepare("update barang_temuan set 
nama_barang=:nama_barang, 
penemu=:penemu, 
kontak_penemu=:kontak_penemu,
tanggal=:tanggal, 
gambar=:gbr,
deskripsi=:deskripsi
where nama_barang=:nama_barang");


$stmt->bindParam(':nama_barang', $nama_barang);
$stmt->bindParam(':penemu', $penemu);
$stmt->bindParam(':kontak_penemu', $kontak_penemu);
$stmt->bindParam(':tanggal', $tanggal);
$stmt->bindParam(':gbr', $gambar);
$stmt->bindParam(':deskripsi', $deskripsi);
$result = $stmt->execute();
if($result) {
    echo '<script type="text/javascript">'; 
            echo 'alert("barang temuan berhasil diubah");'; 
            echo 'window.location.href = "indexadmin.php";';
            echo '</script>';
}
}
?>
