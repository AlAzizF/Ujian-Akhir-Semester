<?php
include("koneksi.php");

if(isset($_POST['save'])){
$query_input=mysqli_query($koneksi,"insert into satuan(id_satuan,nama)
values(
'".$_POST['id_satuan']."',
'".$_POST['nama']."')");

if($query_input){
header('location:input_pelanggan.php');
}else{
	echo mysqli_error();
}
}
include("header.php");
include("bodykiri.php");
?>
<form method="POST">
<table class="table table-bordered" border="1">
	<tr>
		<td>Id satuan</td>
		<td><input type="text" name="id_satuan"></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td><input type="text" name="nama"></td>
	</tr>
			<tr>
			<td><input type="submit" name="save"></td>
            <td><input type="reset" name="reset"></td>
		</tr>
		<tr>
        <td> <a href="tampil_satuan.php"> Menu Satuan</a></td>
		<td> <a href="input_pelanggan.php"> Lanjutkan</a></td>
    </tr>
</table>
</form>
<?php
include("footer.php");
?>