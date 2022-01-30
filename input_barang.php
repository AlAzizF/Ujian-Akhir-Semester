<?php
include("koneksi.php");

if(isset($_POST['save'])){
$query_input=mysqli_query($koneksi,"insert into barang(id_barang,nama,id_kategori,id_satuan)
values(
'".$_POST['id_barang']."',
'".$_POST['nama']."',
'".$_POST['id_kategori']."',
'".$_POST['id_satuan']."')");

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
		<td>Id Barang</td>
		<td><input type="text" name="id_barang"></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td><input type="text" name="nama"></td>
	</tr>
	<tr>
            <td>Id Kategori</td>
            <td><select name="nama">
                <option>---</option>
                <?php
                include "koneksi.php";
                $query = mysqli_query($koneksi,"SELECT * FROM kategori") or die (mysqli_error($koneksi));
                while($data = mysqli_fetch_array($query)){
                    echo "<option value=$data[id_kategori]> $data[nama] </option>";
                }
                ?>
                </select>
        </tr>
 
   

        <tr>
            <td>Id Satuan</td>
            <td><select name="id_satuan">
                <option>---</option>
                <?php
                include "koneksi.php";
                $query = mysqli_query($koneksi,"SELECT * FROM satuan") or die (mysqli_error($koneksi));
                while($data = mysqli_fetch_array($query)){
                    echo "<option value=$data[id_satuan]> $data[nama] </option>";
                }
                ?>
                </select>
        </tr>



    <tr>
			<td><input type="submit" name="save"></td>
            <td><input type="reset" name="reset"></td>
		</tr>
</table>
<p>&nbsp;</p>
<p><a href="input_pelanggan.php">Lanjutkan Transaksi</a></p>
</form>
<?php
include("footer.php");
?>