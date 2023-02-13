<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>TOKO</title>
          <link rel="stylesheet" href="css.css">
          <link rel="stylesheet" href="tampil.css">
</head>
<body>
<center>
          <div class="bakso">
          <h1>بسم الله الرحمن الرحيم</h1>
          </div>
          <h1>Data Toko</h1>
          <table border="1">
          <tr>
          <td>No :</td>
          <td>Nama Toko</td>
          <td>Alamat</td>
          <td>No Siup</td>
          <td>Nama Pemilik</td>
          <td>Nama Bahan</td>
          <td>Satuan</td>
          <td>Harga</td>
          <td>Aksi</td>
          </tr>

<?php
include ("koneksi.php");
$query = mysqli_query($db,"SELECT * FROM tb_toko INNER JOIN tb_bahan ON tb_toko.id_bahan = tb_bahan.id_bahan");
$no = 1;
foreach ($query as $row):
?>
<tr>
          <td><?= $no++; ?></td>
          <td><?= $row['nama_toko'];?></td>
          <td><?= $row['alamat'];?></td>
          <td><?= $row['no_siup'];?></td>
          <td><?= $row['nama_pemilik'];?></td>
          <td><?= $row['nama_bahan'];?></td>
          <td><?= $row['satuan'];?></td>
          <td><?= $row['harga'];?></td>
          <td>
          <a href="edit.php?id_toko=<?= $row['id_toko'];?>"><input type="button" name="edit" value="EDIT"></a>  ||
          <a href="hapus.php?id_toko=<?= $row['id_toko'];?>"><input type="button" name="hapus" value="HAPUS"></a>
          </td>
</tr>
<?php endforeach ?>
</table>
<p>
          <a href="tambah.php"><input type="button" name="tambah" value="TAMBAH"></a>
          <a href="menu.php"><input type="button" name="menu" value="MENU"></a>
</p>
</p>
</center>
</body>
</html>