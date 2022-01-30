<?php 
include("koneksi.php");
$query_view=mysqli_query($koneksi,"select * from pelanggan");
include("header.php");
include("bodykiri.php");
?>
<br/>
<a href="input_pelanggan.php""btn btn-danger"> Tambahkan Pelanggan lagi </a>
<table class="table table-bordered" border="1">
	<tr>
		<td>Id</td>
		<td>Nama Pelanggan </td>
        <td>No Telephone </td>
        <td>Status Member </td>
	</tr>
<?php 
$no=1;
while($tampil=mysqli_fetch_array($query_view)){?>
	<tr>
		<td><?php echo $tampil['id_pelanggan'];?></td>
		<td><?php echo $tampil['nama_pelanggan'];?></td>
        <td><?php echo $tampil['no_tlpon'];?></td>
        <td><?php echo $tampil['status'];?></td>
	</tr>
<?php }?>
</table>
<?php
include("footer.php");
?>