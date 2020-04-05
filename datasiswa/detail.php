<?php
include '../aset/header.php';

include '../koneksi.php';
?>
<?php
$sql = "SELECT * FROM siswa INNER JOIN jurusan ON siswa.id_jurusan = jurusan.id_jurusan 
INNER JOIN kelas ON siswa.id_kelas = kelas.id_kelas";
$res = mysqli_query($koneksi, $sql);
$detail = mysqli_fetch_assoc($res);
?>
<html>
<div class="container">
    <div class="row mt-4">
        <div class="col-md-7">
            <h2>Detail Data Siswa</h2>
            <hr class="bg-light">                
                <table class="table table-bordered">
                <tr>
                <td><strong>Nama</strong></td>                    
                <td><?= $detail['nama'] ?></td>
                </tr>
                <tr>
                <td><strong>Jurusan</strong></td>                    
                <td><?= $detail['jurusan'] ?></td>
                </tr>
                <tr>
                <td><strong>kelas</strong></td>                    
                <td><?= $detail['kelas'] ?></td>
                </tr>
                <tr>
                <td><strong>Nilai Matpel Web</strong></td>                    
                <td><?= $detail['nilaiweb'] ?></td>
                </tr>
                <tr>
                <td><strong>Nilai Matpel PBO</strong></td>                    
                <td><?= $detail['nilaipbo'] ?></td>
                </tr>
                <tr>
                <td><strong>Nilai Matpel BASDAT</strong></td>                    
                <td><?= $detail['nilaibasdat'] ?></td>
                </tr>
                <tr>
                <td><strong>Nilai Matpel Desain</strong></td>                    
                <td><?= $detail['nilaidesain'] ?></td>
                </tr>
                <tr>
                <td><strong>Nilai Matpel PROGDAS</strong></td>                    
                <td><?= $detail['nilaiprogdas'] ?></td>
                </tr>
                <?php
                
                $ket = "";
                $predikat = "";
                $rata = ($detail['nilaiweb']+ $detail['nilaipbo'] +$detail['nilaibasdat'] +$detail['nilaidesain'] + $detail['nilaiprogdas']) / 5;
                if($rata > 89 && $rata <= 100){
                    $ket = "Excellent";
                    $predikat = "A";
                }else if($rata > 79 && $rata < 90){
                    $ket = "Baik";
                    $predikat = "B";
                }else if($rata > 69 && $rata < 80){
                    $ket = "Cukup";
                    $predikat = "C";
                }else if($rata > 59 && $rata < 70){
                    $ket = "Kurang";
                    $predikat = "D";
                }else if($rata <= 59){
                    $ket = "Rendah";
                    $predikat = "E";
                }
                ?>
                <td><strong>Rata-Rata</strong></td>                    
                <td><?= $rata ?></td>
                </tr>
                <td><strong>predikat</strong></td>                    
                <td><?= $predikat ?></td>
                </tr>
                <td><strong>Keterangan</strong></td>                    
                <td><?= $ket ?></td>
                </tr>
                <tr>
                <td class="text-right" colspan="2">
                <a href="index.php" class="btn btn-success"> <i class="fa fa-angle-double-left"></i> Kembali </a>
                
                </td>
                </tr>

                </table>
        </div>
        </div>
</div>
</html>
<?php
include '../aset/footer.php';
?>
