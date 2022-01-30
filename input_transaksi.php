<?php
include("koneksi.php");

if(isset($_POST['save'])){
$query_input=mysqli_query($koneksi,"insert into transaksi(id_transaksi,nama_transaksi,tanggal_transaksi,harga,qty,id_barang,diskon,id_pelanggan)
values(
'".$_POST['id_transaksi']."',
'".$_POST['nama_transaksi']."',
'".$_POST['tanggal_transaksi']."',
'".$_POST['harga']."',
'".$_POST['qty']."',
'".$_POST['id_barang']."',
'".$_POST['diskon']."',
'".$_POST['id_pelanggan']."')");

if($query_input){
header('location:tampil_transaksi.php');
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
		<td>Nama Transaksi</td>
		<td><input type="text" name="nama_transaksi"></td>
	</tr>

    <tr>
		<td>Tanggal Transaksi</td>
		<td><input type="date" name="tanggal_transaksi"></td>
	</tr>

    <tr>
		<td>Harga</td>
		<td><input type="text" name="harga"></td>
	</tr>

    <tr>
    <td height="34">Total yang elu mau</td>
                
                <td>
                    <select name="qty">
                        <option value="">- Totalnya -</option>
                        <?php
                            for($x=1;$x<=50;$x++){
                        ?>
                        <option value="<?php echo $x; ?>"><?php echo $x; ?></option>
                        <?php
                            }
                        ?>
                    </select>
                </td>
	</tr>
	<tr>
            <td>Id Barang</td>
            <td><select name="id_barang">
                <option>---</option>
                <?php
                include "koneksi.php";
                $query = mysqli_query($koneksi,"SELECT * FROM barang") or die (mysqli_error($koneksi));
                while($data = mysqli_fetch_array($query)){
                    echo "<option value=$data[id_barang]> $data[nama] </option>";
                }
                ?>
                </select>
        </tr>
 

        <tr>
            <td>Id Pelanggan</td>
            <td><select name="id_pelanggan">
                <option>---</option>
                <?php
                include "koneksi.php";
                $query = mysqli_query($koneksi,"SELECT * FROM pelanggan") or die (mysqli_error($koneksi));
                while($data = mysqli_fetch_array($query)){
                    echo "<option value=$data[id_pelanggan]> $data[nama_pelanggan] </option>";
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