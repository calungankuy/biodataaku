<?php 
include '../database.php';
$siswa = new Bio();
$aksi = $_GET['aksi'];
if(isset($_POST['proses']))
{   
    $id= $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin =$_POST['jenis_kelamin'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $agama = $_POST['agama'];
}
if($aksi == "tambah")
{
    $siswa->create($nama,$alamat,$jenis_kelamin,$tgl_lahir,$agama);
    header("location:index.php");
}elseif($aksi == "update")
{
    $siswa->update($id,$nama,$alamat,$jenis_kelamin,$tgl_lahir,$agama);
    header("location:index.php");
}elseif($aksi == "delete")
{
    $siswa->delete($_GET['id']);
    header("location:index.php");
}
?>
