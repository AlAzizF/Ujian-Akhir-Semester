<?php 
include("koneksi.php");
$query_view=mysqli_query($koneksi,"select * from transaksi");
include("header.php");
include("bodykiri.php");
?>
<br/>
<a href="input_transaksi.php""btn btn-danger"> Tambahkan Transaksi </a>
<table class="table table-bordered" border="1">
	<tr>
		<td>Id</td>
		<td>Nama Transaksi </td>
        <td>Tanggal </td>
        <td>Harga </td>
        <td>Kuantity </td>
        <td>Id Barang </td>
        <td>Diskon </td>
        <td>Id Pelanggan </td>
	</tr>
<?php 
$no=1;
while($tampil=mysqli_fetch_array($query_view)){?>
	<tr>
		<td><?php echo $tampil['id_transaksi'];?></td>
		<td><?php echo $tampil['nama_transaksi'];?></td>
        <td><?php echo $tampil['tanggal_transaksi'];?></td>
        <td><?php echo $tampil['harga'];?></td>
        <td><?php echo $tampil['qty'];?></td>
        <td><?php echo $tampil['id_barang'];?></td>
        <td><?php echo $tampil['diskon'];?></td>
        <td><?php echo $tampil['id_pelanggan'];?></td>
	</tr>
<?php }?>
</table>
<?php
include("footer.php");
?>