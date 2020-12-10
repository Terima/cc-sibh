<?php
    if(!empty($_POST["tambahdata"])) {
        require_once("koneksi.php");
        $nama = $_FILES['gbr']['name'];
        $file_tmp = $_FILES['gbr']['tmp_name'];
        $folder = 'images/';
        $cek = move_uploaded_file($file_tmp, $folder.$nama);
        if($cek){

$sql = "INSERT INTO barang_hilang (nama_barang,pemilik,kontak_pemilik,tanggal,gambar,deskripsi) VALUES (:nama_barang,:pemilik,:kontak_pemilik,:tanggal,:gambar,:deskripsi)";
$stmt = $pdo_conn->prepare( $sql );

$result = $stmt->execute(array( 
':nama_barang'=>$_POST['nama_barang'],
':pemilik'=>$_POST['pemilik'],
':kontak_pemilik'=>$_POST['kontak_pemilik'],
':tanggal'=>$_POST['tanggal'],
':gambar'=>$nama,
':deskripsi'=>$_POST['deskripsi']
));


if (!empty($result) ){
    echo '<script type="text/javascript">'; 
            echo 'alert("barang hilang berhasil ditambahkan");'; 
            echo 'window.location.href = "indexadmin.php";';
            echo '</script>';
}
}
    }

?>
