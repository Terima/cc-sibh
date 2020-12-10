<?php
if(!empty($_POST["tambahdata"])) {
require_once("koneksi.php");
$nama = $_FILES['gbr']['name'];
$file_tmp = $_FILES['gbr']['tmp_name'];
$folder = 'images/';
$cek = move_uploaded_file($file_tmp, $folder.$nama);

if($cek){
$sql = "INSERT INTO berita (judul,gambar,isi) VALUES (:judul,:gambar,:isi)";
$stmt = $pdo_conn->prepare( $sql );

$result = $stmt->execute(array( 
':judul'=>$_POST['judul'],
':gambar'=>$nama,
':isi'=>$_POST['isi']
));


if (!empty($result) ){
    echo '<script type="text/javascript">'; 
            echo 'alert("berita dan himbauan berhasil ditambahkan");'; 
            echo 'window.location.href = "indexadmin.php";';
            echo '</script>';
}
}
}
?>
