<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>TAMBAH</title>
          <link rel="stylesheet" href="css.css">
          <link rel="stylesheet" href="tampil.css">
</head>
<body>
<center>
          <div class="bakso">
                    <h1>بسم الله الرحمن الرحيم</h1>
          </div>
<h1>TAMBAH DATA</h1>
<form action="proses_tambah.php" method="POST">
          <table border="3">
          <tr>
          <td><label for="nama_toko">Nama Toko</label></td>
          <td><input type="text" name="nama_toko"></td>
          </tr>
          <tr>
          <td><label for="alamat">Alamat</label></td>
          <td><input type="text" name="alamat"></td>
          </tr>
          <tr>
          <td><label for="no_siup">No Siup</label></td>
          <td><input type="number" name="no_siup"></td>
          </tr>
          <tr>
          <td><label for="nama_pemilik">Nama Pemilik</label></td>
          <td><input type="text" name="nama_pemilik"></td>
          </tr>
          <tr>
          <td><label for="nama_bahan">Nama Bahan</label></td>
          <td><input type="text" name="nama_bahan"></td>
          </tr>
          <tr>
          <td><label for="satuan">Satuan</label></td>
          <td><input type="text" name="satuan"></td>
          </tr>
          <tr>
          <td><label for="harga">Harga</label></td>
          <td><input type="number" name="harga"></td>
          </tr>
          <tr>
          <td><input type="submit" name="tambah" value="TAMBAH"></td>
          </tr>
          </table>
          <a href="tampil.php"><input type="button" value="KEMBALI"></a>
</center>
</body>
</html>