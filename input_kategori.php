<?php
include("koneksi.php");

if(isset($_POST['save'])){
$query_input=mysqli_query($koneksi,"insert into kategori(id_kategori,nama)
values(
'".$_POST['id_kategori']."',
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
		<td>Id Kategori</td>
		<td><input type="text" name="id_kategori"></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td><input type="text" name="nama"></td>
	</tr>
			<tr>
			<td>  </td>
            <td><input type="submit" name="save">
                <input type="reset" name="reset"></td>
		</tr>
    <tr>
        <td> <a href="tampil_kategori.php"> Menu Kategori</a></td>
		<td> <a href="input_pelanggan.php"> Lanjutkan</a></td>
    </tr>
</table>
</form>
<?php
include("footer.php");
?>