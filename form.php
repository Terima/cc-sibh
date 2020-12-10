<html>
    <head>
        <link media="all" type="text/css" rel="stylesheet" href="css/cssform.css">
    </head>
<body>
    
    <div class="atas">
        <a href="indexadmin.php" style="color:white">Tampil Data</a>
    </div>
    <h1>Tambah Data Barang Hilang</h1>
   
    <form name="frmAdd" action="tambah.php" method="POST" enctype="multipart/form-data">
    
    <label>Nama Barang: </label><br/>
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
    
    <input name="tambahdata" type="submit" value="Tambah" >
     </form></body>
    </html>