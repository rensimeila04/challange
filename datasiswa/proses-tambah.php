<?php

include '../koneksi.php';

if(isset($_POST['simpan']))
{
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$nilaiweb = $_POST['nilaiweb'];
$nilaipbo = $_POST['nilaipbo'];
$nilaibasdat = $_POST['nilaibasdat'];
$nilaidesain = $_POST['nilaidesain'];
$nilaiprogdas = $_POST['nilaiprogdas'];
$id_jurusan = "";
    if($_POST['id_jurusan'] == "RPL"){
        $id_jurusan = 1;
    }else if($_POST['id_jurusan'] == "TKJ"){
        $id_jurusan = 2;
    }else if($_POST['id_jurusan'] == "MM"){
        $id_jurusan = 3;
    }
$id_kelas = "";
    if($_POST['id_kelas'] == "X"){
        $id_kelas = 1;
    }else if($_POST['id_kelas'] == "XI"){
        $id_kelas = 2;
    }else if($_POST['id_kelas'] == "XII"){
        $id_kelas = 3;
    }
$sql = "INSERT INTO siswa (nis, nama, alamat, nilaiweb, nilaipbo, nilaibasdat, nilaidesain, nilaiprogdas, id_jurusan, id_kelas)
            VALUES ('$nis', '$nama', '$alamat', $nilaiweb', '$nilaipbo', '$nilaibasdat', '$nilaidesain', '$nilaiprogdas', '$id_jurusan', '$id_kelas')";
    
$res = mysqli_query($koneksi, $sql);

$count = mysqli_affected_rows($koneksi);

    if($count == 1)
    {
        header("Location: index.php");
    }else 
    {
        header("Location: index.php");
    }
 
}else 
{
    header("Location: index.php");    
}

?>