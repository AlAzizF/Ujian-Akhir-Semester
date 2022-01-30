<?php 
include("koneksi.php");
$query_view=mysqli_query($koneksi,"select * from kategori");
include("header.php");
include("bodykiri.php");

?>
<br/>
<a href="input_kategori.php""btn btn-danger"> Tambahkan Kategori Lain </a>
<table class="table table-bordered" border="1">
	<tr>
		<td>Id Kategori</td>
		<td>Nama</td>
	</tr>
<?php 
$no=1;
while($tampil=mysqli_fetch_array($query_view)){?>
	<tr>
		<td><?php echo $tampil['id_kategori'];?></td>
		<td><?php echo $tampil['nama'];?></td>
	</tr>
<?php }?>
</table>
<?php
include("footer.php");
?>