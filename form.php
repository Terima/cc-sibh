<html>
    <head>
        <link media="all" type="text/css" rel="stylesheet" href="css/cssform.css">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    </head>
<body>
    
    <div class="atas">
        <a href="indexadmin.php"><i class="fas fa-home"> Beranda</i></a>
    </div>
    <h1>Tambah Data Barang Hilang</h1>
   
    <form name="frmAdd" action="tambah.php" method="POST" enctype="multipart/form-data">
    
    <label>Nama Barang: </label>
    <input type="text" name="nama_barang" required /><br/><br/>
    
    <label>Nama Pemilik : </label><br/>
    <input type="text" name="pemilik" required /><br/><br/>

    <label>Kontak Pemilik: </label><br/>
    <input type="text" name="kontak_pemilik" required /><br/><br/>
   
    <label>Tanggal Laporan: </label><br/>
    <input type="date" name="tanggal" required /><br/><br/>
    
    <label>Gambar: </label><br/>
    <input type="file" name="gbr" /><br/><br/>

    <label>Deskripsi: </label><br/>
    <textarea name="deskripsi" required> </textarea>  <br/><br/>
    <button type="submit"> Tambah </button>

     </form></body>
    </html>