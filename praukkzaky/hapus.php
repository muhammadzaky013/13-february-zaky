<?php
include("koneksi.php");
if($_GET['id_toko']){
$id = $_GET['id_toko'];

$sql = "DELETE FROM tb_toko WHERE id_toko='$id'";
$query = mysqli_query($db,$sql);

$sql = "DELETE FROM tb_bahan WHERE id_bahan='$id'";
$query = mysqli_query($db,$sql);

if($query){
          header('location:tampil.php?status=sukses!');
}else{
          header('location:tampil.php?status=gagal!');
}
}
?>