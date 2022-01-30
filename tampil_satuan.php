<?php 
include("koneksi.php");
$query_view=mysqli_query($koneksi,"select * from satuan");
include("header.php");
include("bodykiri.php");
?>
<br/>
<a href="input_satuan.php""btn btn-danger"> Tambahkan Satuan </a>
<table class="table table-bordered" border="1">
	<tr>
		<td>Id Satuan</td>
		<td>Nama</td>
	</tr>
<?php 
$no=1;
while($tampil=mysqli_fetch_array($query_view)){?>
	<tr>
		<td><?php echo $tampil['id_satuan'];?></td>
		<td><?php echo $tampil['nama'];?></td>
	</tr>
<?php }?>
</table>
<?php
include("footer.php");
?>