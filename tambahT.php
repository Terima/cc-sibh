<?php
if(!empty($_POST["tambahdata"])) {
require_once("koneksi.php");
$nama = $_FILES['gbr']['name'];
$file_tmp = $_FILES['gbr']['tmp_name'];
$folder = 'images/';
$cek = move_uploaded_file($file_tmp, $folder.$nama);
if($cek){
$sql = "INSERT INTO barang_temuan (nama_barang,penemu,kontak_penemu,tanggal,gambar,deskripsi) VALUES (:nama_barang,:penemu,:kontak_penemu,:tanggal,:gambar,:deskripsi)";
$stmt = $pdo_conn->prepare( $sql );

$result = $stmt->execute(array( 
':nama_barang'=>$_POST['nama_barang'],
':penemu'=>$_POST['penemu'],
':kontak_penemu'=>$_POST['kontak_penemu'],
':tanggal'=>$_POST['tanggal'],
':gambar'=>$nama,
':deskripsi'=>$_POST['deskripsi']
));


if (!empty($result) ){
    echo '<script type="text/javascript">'; 
            echo 'alert("barang temuan berhasil ditambahkan");'; 
            echo 'window.location.href = "indexadmin.php";';
            echo '</script>';
}
}
}
?>
