<?php 
	error_reporting(0);
?>
<center>
<table border="1" width="550">
	<tr>
		<th width="100"><a href="edit.php">FORM</a></th>
	</tr>
</table>
</center><br><br>

<form method="POST">
	<center><h3>Edit Profile</h3></center><br><br>
	<table>
		<tr>
			<td>NIM</td>
			<td>:</td>
			<td><input type="number" name="nim" length="10" value="<?php echo $_SESSION['nim'];?>"></td>
		</tr>
		<tr>
			<td>NAMA</td>
			<td>:</td>
			<td><input type="text" name="nama" value="<?php echo $_SESSION['nama'];?>"></td>
		</tr>
		<tr>
			<td>JENIS KELAMIN</td>
			<td>:</td>
			<td><input type="radio" name="jeniskelamin" value="lakilaki">Laki-Laki<br/>
				<input type="radio" name="jeniskelamin" value="perempuan">Perempuan<br/>
			</td>
		</tr>
		<tr>
			<td>PROGRAM STUDI</td>
			<td>:</td>
			<td><select name="prodi">
				<option value="mi" <?php if($_SESSION['prodi']=='mi'){echo'selected';}?>>MI</option>
				<option value="mp" <?php if($_SESSION['prodi']=='mp'){echo'selected';}?>>MP</option>
				<option value="siskom" <?php if($_SESSION['prodi']=='siskom'){echo'selected';}?>>Sistem Komputer</option>
				<option value="ilkom" <?php if($_SESSION['prodi']=='ilkom'){echo'selected';}?>>Ilmu Komunikasi</option>
			</select></td>
		</tr>
		<tr>
			<td>FAKULTAS</td>
			<td>:</td>
			<td><select name="fakultas">
				<option value="fit" <?php if($_SESSION['fakultas']=='fit'){echo'selected';}?>>FIT</option>
				<option value="fte" <?php if($_SESSION['fakultas']=='fte'){echo'selected';}?>>FTE</option>
				<option value="fkb" <?php if($_SESSION['fakultas']=='fkb'){echo'selected';}?>>FKB</option>
				<option value="fif" <?php if($_SESSION['fakultas']=='fif'){echo'selected';}?>>FIF</option>
			</select></td>
		</tr>
		<tr>
			<td>ASAL</td>
			<td>:</td>
			<td><textarea name="asal" value="<?php echo $_SESSION['asal'];?>"></textarea></td>
		</tr>
		<tr>
			<td>MOTO HIDUP</td>
			<td>:</td>
			<td><textarea name="motohidup" value="<?php echo $_SESSION['motohidup'];?>"></textarea></td>
		</tr>
	</table>
	<br>
	<input type="submit" name="update" value="update"> &nbsp; <a href="form.php"> <input type="button" name="kembali" value="Kembali"></a>
	
</form>
<?php 
	if(isset($_POST['update'])){
		$nama=$_POST['nama'];
		$nim=$_POST['nim'];
		$jeniskelamin=$_POST['jeniskelamin'];
		$prodi=$_POST['prodi'];
		$fakultas=$_POST['fakultas'];
		$asal=$_POST['asal'];
		$motohidup=$_POST['motohidup'];

		$host="localhost";
		$user="root";
		$pass="";
		$db="mahasiswa";
		$koneksi=mysqli_connect($host,$user,$pass,$db);

		$sql=$koneksi->query("UPDATE `datamhs` SET `nama`='$nama',`nim`='$nim',`jeniskelamin`='$jeniskelamin',`prodi`='$prodi',`fakultas`='$fakultas',`asal`='$asal', `motohidup`='$motohidup',");
		echo "data berhasil diupdate";
	}
 ?>