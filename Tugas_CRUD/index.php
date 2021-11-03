<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  </head>
  <body>
    <center><h1>Data Mahasiswa</h1><center>
    <a href="tambah_mhs.php" class="btn btn-primary" role="button" data-bs-toggle="button">Tambah Mahasiswa</a>
    <br/>
    <br>
    <div class="container">
    <div class="card mt-3">
      <div class="card-header bg-success text-white">
        Daftar Data Mahasiswa
      </div>
      <div class="card-body">
        
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Kota</th>
                <th>Email</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
    <tbody>
      <?php
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
      $query = "SELECT * FROM tbl_mhs ORDER BY id ASC";
      $result = mysqli_query($koneksi, $query);
      //mengecek apakah ada error ketika menjalankan query
      if(!$result){
        die ("Query Error: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
      }

      //buat perulangan untuk element tabel dari data mahasiswa
      $no = 1;
      // hasil query akan disimpan dalam variabel $data dalam bentuk array
      // kemudian dicetak dengan perulangan while
      while($row = mysqli_fetch_assoc($result))
      {
      ?>
       <tr>
          <td><?php echo $row['id']; ?></td>
          <td><?php echo $row['nim']; ?></td>
          <td><?php echo $row['namamhs'];?></td>
          <td><?php echo $row['jk'];?></td>
          <td><?php echo $row['alamat'];?></td>
          <td><?php echo $row['kota'];?></td>
          <td><?php echo $row['email'];?></td>
          <td style="text-align: center;"><img src="fotomhs/<?php echo $row['foto']; ?>" style="width: 120px;"></td>
          <td>
              <a href="edit_mhs.php?id=<?php echo $row['id']; ?>" class="btn btn-primary" role="button" data-bs-toggle="button">Edit</a> |
              <a href="proses_hapus.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
          </td>
      </tr>
         
      <?php
      $no++;
      }
      ?>
    </tbody>
    </table>
    </div>
    </div>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>