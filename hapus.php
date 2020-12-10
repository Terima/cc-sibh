<?php
require_once("koneksi.php");
$kode = $_GET["id"];
$stmt=$pdo_conn->prepare("delete from barang_hilang where id=:id");

$stmt->bindParam(':id', $kode);
$stmt->execute();
echo '<script type="text/javascript">'; 
echo 'alert("Berhasil Dihapus !");'; 
echo 'window.location.href = "indexadmin.php";';
echo '</script>';
?>
