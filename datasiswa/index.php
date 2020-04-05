<?php
include '../koneksi.php';
    $sql = "SELECT * FROM siswa INNER JOIN kelas ON siswa.id_kelas = kelas.id_kelas INNER JOIN jurusan ON siswa.id_jurusan = jurusan.id_jurusan ORDER BY nama";

    $res = mysqli_query($koneksi, $sql);
    $siswa = array();

    while ($data = mysqli_fetch_assoc($res)) {
        $siswa[] = $data;
    }
?>


<?php
include '../aset/header.php';
?>

<div class="container">
    <div class="row at-4">
    <div class="col-md">
            </div>
        </div>
    </div>

<div class="card">
    <div class="card-header">
        <h2 class="card-title"><i class="far fa-edit"></i>Data siswa</h2>
  </div>
  <div class="card-body">
  <table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Kelas</th>
      <th scope="col">Jurusan</th>
      <th scope="col">Alamat</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <?php
    $no = 1;
    foreach ($siswa as $s) { ?>
    
    <tr>
        <td scope="row"><?= $no ?></td>
        <td><?=$s['nama']?></th>
        <td><?=$s['kelas']?></th>
        <td><?=$s['jurusan']?></th>
        <td><?= $s['alamat'] ?></td>
       
        <td>
            <a href="http://localhost/formulir/datasiswa/detail.php" class="badge badge-success">Detail</a>
            <a href="#" class="badge badge-danger">Hapus</a>
            
        </td>
        </tr>
        
    <?php
        $no++;
    }
    ?>
</table>
<a href="http://localhost/formulir/datasiswa/tambah.php" class="badge badge-primary">+</a>
    
    </div>
</div>

<?php
include '../aset/footer.php';
?>