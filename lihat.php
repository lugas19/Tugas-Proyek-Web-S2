
<?php
echo "<head><title>DATA BAYAR</title></head>";
$fp = fopen("database.txt","r");
echo "<table border=0>";
	while ($isi = fgets($fp,80))
		{
			$pangkas = explode("|",$isi); //pangkas yang ada huruf "|"
			echo "<tr><td>Nama Pelanggan</td><td>: $pangkas[0]</td></tr>";
			echo "<tr><td>Nama Barang </td><td>: $pangkas[1]</td></tr>";
			echo "<tr><td>Jumlah </td><td>: $pangkas[2]</td></tr>";
			echo "<tr><td>Harga </td><td>: $pangkas[3]</td></tr>";
			echo "<tr><td>Total </td><td>: $pangkas[4]</td></tr>";
			echo "<tr><td>Bukti </td><td>: <img src=$pangkas[5] width=300 height=300 ></td></tr>
			<tr><td>&nbsp;<hr></td><td>&nbsp;<hr></td></tr>";
		}
echo "</table>";
echo "<a href=bayar.php> Isi Buku tamu </a>";
echo "<a href=index.php> Profile </a>";
?>
