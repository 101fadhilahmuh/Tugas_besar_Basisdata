<form action="" method="POST">
<div>
	<table>
		<thead>
			<tr>
				<th>TAMBAH DATA BARU</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Nama</td>
			</tr>
			<tr>
				<td><input required type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Email</td>
			</tr>
			<tr>
				<td><input required type="text" name="email"></td>
				</td>
			</tr>			
			<tr>
				<td>Kata Sandi Baru</td>
			</tr>
			<tr>
				<td><input required type="text" name="Kata Sandi Baru"></td>
				</td>
		</tbody>
		<tfoot>
			<tr>
				<td>
					<input  type="submit" value="SIMPAN" name="">
					<input  type="reset" value="RESET" name="">
				</td>
			</tr>			
		</tfoot>
	</table>
</div>
</form>
<center>
<?php 
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$nama = $_POST['nama'];
		$email = $_POST['email'];
		$SQL = "INSERT INTO tb_bookingbus(nama,email,website,pesan) VALUES('$nama','$email')";
		if (mysqli_query($MySQli,$SQL)) {
			header("location:?page=list");
		} else {
			echo "Gagal menambahkan data booking bus !!";
		}
		
	}
 ?>
 </center>