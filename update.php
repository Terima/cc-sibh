<?php
require_once("koneksi.php");
$nama = $_FILES['gbr']['name'];
$file_tmp = $_FILES['gbr']['tmp_name'];
$folder = './images/';

$cek = move_uploaded_file($file_tmp, $folder.$nama);

$nama_barang = $_POST["nama_barang"];
$pemilik = $_POST["pemilik"];
$kontak_pemilik = $_POST["kontak_pemilik"];
$tanggal = $_POST["tanggal"];
$gambar = $nama;
$deskripsi = $_POST["deskripsi"];




if($cek){
$stmt=$pdo_conn->prepare("update barang_hilang set 
nama_barang=:nama_barang, 
pemilik=:pemilik, 
kontak_pemilik=:kontak_pemilik,
tanggal=:tanggal, 
gambar=:gbr,
deskripsi=:deskripsi
where nama_barang=:nama_barang");


$stmt->bindParam(':nama_barang', $nama_barang);
$stmt->bindParam(':pemilik', $pemilik);
$stmt->bindParam(':kontak_pemilik', $kontak_pemilik);
$stmt->bindParam(':tanggal', $tanggal);
$stmt->bindParam(':gbr', $gambar);
$stmt->bindParam(':deskripsi', $deskripsi);
$result = $stmt->execute();
if($result) {
    echo '<script type="text/javascript">'; 
            echo 'alert("barang hilang berhasil diubah");'; 
            echo 'window.location.href = "indexadmin.php";';
            echo '</script>';
}
}
?>
