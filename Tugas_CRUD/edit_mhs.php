 <?php
  // memanggil file koneksi.php untuk membuat koneksi
include 'koneksi.php';

  // mengecek apakah di url ada nilai GET id
  if (isset($_GET['id'])) {
    // ambil nilai id dari url dan disimpan dalam variabel $id
    $id = ($_GET["id"]);

    // menampilkan data dari database yang mempunyai id=$id
    $query = "SELECT * FROM tbl_mhs WHERE id='$id'";
    $result = mysqli_query($koneksi, $query);
    // jika data gagal diambil maka akan tampil error berikut
    if(!$result){
      die ("Query Error: ".mysqli_errno($koneksi).
         " - ".mysqli_error($koneksi));
    }
    // mengambil data dari database
    $data = mysqli_fetch_assoc($result);
      // apabila data tidak ada pada database maka akan dijalankan perintah ini
       if (!count($data)) {
          echo "<script>alert('Data tidak ditemukan pada database');window.location='index.php';</script>";
       }
  } else {
    // apabila tidak ada data GET id pada akan di redirect ke index.php
    echo "<script>alert('Masukkan data id.');window.location='index.php';</script>";
  }         
  ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Edit Mahasiswa</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <center>
        <h1>Edit Mahasiswa</h1>
        </center>
        <div class="card">
  <h6 class="card-header">Edit Mahasiswa</h6>
  <div class="card-body">
      <form method="POST" action="proses_edit.php" enctype="multipart/form-data" >
      <section class="base">
        <!-- menampung nilai id produk yang akan di edit -->
        <input name="id" value="<?php echo $data['id']; ?>"  hidden />
<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">NIM</span>
  <input type="text" name="nim" class="form-control" value="<?php echo $data['nim']; ?>" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
        <div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Nama</span>
  <input type="text" name="namamhs" class="form-control" value="<?php echo $data['namamhs']; ?>" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
        <div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Jenis Kelamin</span>
  <input type="text" name="jk" class="form-control" value="<?php echo $data['jk']; ?>" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
        <div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Alamat</span>
  <input type="text" name="alamat" class="form-control" value="<?php echo $data['alamat']; ?>" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
        <div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Kota</span>
  <input type="text" name="kota" class="form-control" value="<?php echo $data['kota']; ?>" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
        <div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
  <input type="text" name="email" class="form-control" value="<?php echo $data['email']; ?>" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
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