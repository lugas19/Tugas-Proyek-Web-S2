<!DOCTYPE html>
<html>
<head>
<?php if(!isset($_POST['submit'])) : 

//Selain pakai header kita bisa pakai fungsi dari Js
//Agar diarahkan ke halaman login.
  echo "
  <script>

      alert('Login terlebih dahulu!');
      document.location.href = 'login.php'; 

  </script>

  ";

    /*header("Location: login.php");*/

endif;
?>
<?php if($_POST['username'] != 'lugas') : ?>
    <script type="text/javascript">
      alert('Salah username');
    </script>
    <h1>Maaf Salah Password! klik <a href="login.php">login</a> untuk kembali</h1>
<?php else: ?>

<title>Web Lugas</title>
  <link rel="stylesheet" type="text/css" href="style-login.css">
</head>
<body>

<!-- DIV MENU ATAS -->
<div class="menu-atas">
    <ul>
      <li class="one-menu"><a href="index.php">Menu</a></li>
      <li><a href="item.php">Item</a></li>
      <li><a aling="center" href="bayar.php" class="btn btn-primary btn-lg">Bayar</a></li>
      <li><a href="contact.php">Contact</a></li>
    </ul>
</div><!-- akhir div.menu atas -->

<div class="clear"></div>
<!-- DIV CONTAINER -->
<div class="container">
  <!-- DIV LOGIN -->
  <div class="form">
    <!-- Masukan Form ke div login yang ada di div container [METODE POST] -->
<table>
    <form action="proses.php" method="post" enctype="multipart/form-data">
    <tr>
      <td><label for="nama" ><font color="white">Nama Pelanggan</font></label></td>
      <td><input type="text" name="nama" class="form-control" id="nama"></td>
    </tr>
    <tr>
      <td><label for="alamat"><font color="white">Nama Barang</font></label></td>
      <td><input type="text" name="nama_barang" class="form-control" id="alamat"></td>
    </tr>
    <tr>
      <td><label for="alamat"><font color="white">Jumlah</font></label></td>
      <td><input type="text" name="jumlah" class="form-control" id="alamat"></td>
    </tr>
    <tr>
      <td><label for="alamat"><font color="white">Harga Satuan</font></label></td>
      <td><input type="text" name="harga" class="form-control" id="alamat"></td>
    </tr>
    <tr>
      <td><label for="alamat"><font color="white">Bukti Transaksi</font></label></td>
      <td><input type="file" name="file"></td>
    </tr>
    <tr>
      <td><button type="submit" name="Submit" class="btn btn-primary">Submit</button></td>
      <td><button type="reset" name="Submit2" class="btn btn-danger">Reset</button></td>
    </tr>
          
          
    </form><!-- akhir dari form form -->
</table>

  </div><!-- akhir div form -->

</div><!-- akhir div container -->
<div class="footer">
  <h1 id="footer">Lugas Web Desain</h1>
</div>

<script type="text/javascript" src="script-login.js"></script><!-- JavaScript -->


<?php endif; ?>


  
</body>
</html>

