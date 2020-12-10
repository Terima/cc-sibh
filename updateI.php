<?php
require_once("koneksi.php");
$nama = $_FILES['gbr']['name'];
$file_tmp = $_FILES['gbr']['tmp_name'];
$folder = './images/';

$cek = move_uploaded_file($file_tmp, $folder.$nama);

$judul = $_POST["judul"];
$gambar = $nama;
$isi = $_POST["isi"];


if($cek){
$stmt=$pdo_conn->prepare("update berita set 
judul=:judul, 
gambar=:gbr,
isi=:isi
where judul=:judul");


$stmt->bindParam(':judul', $judul);
$stmt->bindParam(':gbr', $gambar);
$stmt->bindParam(':isi', $isi);
$result = $stmt->execute();
if($result) {
    echo '<script type="text/javascript">'; 
            echo 'alert("informasi dan himbauan berhasil diubah");'; 
            echo 'window.location.href = "indexadmin.php";';
            echo '</script>';
}
}

?>
