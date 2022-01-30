<?php 
include("koneksi.php");
$query_view=mysqli_query($koneksi,"select * from barang");

include("header.php");
include("bodykiri.php");
?>
<br/>
<a href="input_barang.php""btn btn-danger"> Tambahkan Barang lagi </a>
<table class="table table-bordered" border="1">
	<tr>
		<td>Id</td>
		<td>Nama</td>
        <td>Kategori </td>
        <td>Satuan </td>
	</tr>
<?php 
$no=1;
while($tampil=mysqli_fetch_array($query_view)){?>
	<tr>
		<td><?php echo $tampil['id_barang'];?></td>
		<td><?php echo $tampil['nama'];?></td>
        <td><?php echo $tampil['id_kategori'];?></td>
        <td><?php echo $tampil['id_satuan'];?></td>
	</tr>
<?php }?>
</table>
<?php
include("footer.php");
?>