 <?php
  // memanggil file koneksi.php untuk membuat koneksi
include 'koneksi.php';      
  ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Tambah Mahasiswa</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <center>
        <h1>Form Tambah Mahasiswa</h1>
        </center>
        <div class="card">
  <h6 class="card-header">Tambah Mahasiswa</h6>
  <div class="card-body">
      <form method="POST" action="proses_tambah.php" enctype="multipart/form-data" >
      <section class="base">
<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">NIM</span>
  <input type="text" name="nim" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
        <div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Nama</span>
  <input type="text" name="namamhs" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
        <div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Jenis Kelamin</span>
  <input type="text" name="jk" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
        <div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Alamat</span>
  <input type="text" name="alamat" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
        <div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Kota</span>
  <input type="text" name="kota" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
        <div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
  <input type="text" name="email" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
          <div class="input-group mb-3">
  <input type="file" name="foto" class="form-control" id="inputGroupFile02">
  <label class="input-group-text" for="inputGroupFile02">Foto</label>
</div>
        </div>
        <div>
          <center>
         <input class="btn btn-primary" type="submit" value="Submit">
         </center>
        </div>
        </section>
      </form>
  </div>
</div>
      </div>
          <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>