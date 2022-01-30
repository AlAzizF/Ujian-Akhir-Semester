<?php
include("koneksi.php");

if(isset($_POST['save'])){
$query_input=mysqli_query($koneksi,"insert into pelanggan(id_pelanggan,nama_pelanggan,no_tlpon,status)
values(
'".$_POST['id_pelanggan']."',
'".$_POST['nama_pelanggan']."',
'".$_POST['no_tlpon']."',
'".$_POST['status']."')");

if($query_input){
header('location:input_transaksi.php');
}else{
	echo mysqli_error();
}
}
include("header.php");
include("bodykiri.php");
?>
<form method="POST">
<table class="table table-bordered" border="0">
	<tr>
		<td>Id Pelanggan</td>
		<td><input type="text" name="id_pelanggan"></td>
	</tr>
	<tr>
		<td>Nama Pelanggan</td>
		<td><input type="text" name="nama_pelanggan"></td>
	</tr>
	<tr>
		<td>No Tlpon</td>
		<td><input type="text" name="no_tlpon"></td>
	</tr>
    <tr>
		<td>Status</td>
        <td><input type="radio" name="status" value="member"> Member
        <input type="radio" name="status" value="customer"> Customer </td>
	</tr>
		<tr>
			<td><input type="submit" name="save"></td>
            <td><input type="reset" name="reset"></td>
		</tr>
	<tr>
        <td> <a href="input_satuan.php"> Tambah Satuan</a></td>
		<td> <a href="input_kategori.php"> Tambahkan Kategori</a></td>
    </tr>
</table>
<p><a href="input_barang.php">Tambah Barang baru</a></p>
<p>Jika anda sudah menjadi pelanggan kami..??</p>
<p><a href="input_transaksi.php">Silahkan klik disini untuk langsung memesan</a></p>
</form>
<?php
include("footer.php");
?>