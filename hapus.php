<?php
include("koneksi.php");
$id=$_GET['id'];

$sql="DELETE FROM tb_motor where id_motor=$id";
$query=mysqli_query($koneksi, $sql);

$sql="DELETE FROM tb_peminjam where id_peminjam=$id";
$query=mysqli_query($koneksi, $sql);

if($query){
    header("location:tampil.php?sukses");
}else{
    die("akses dilarang");
}
?>

