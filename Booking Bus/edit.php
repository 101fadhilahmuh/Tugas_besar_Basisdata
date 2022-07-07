<?php 
	
	$id=$_GET['id'];
	$SQL ="SELECT * FROM tb_bookingbus WHERE id = $id";
			$data=mysqli_query($MySQli,$SQL);
			$d = mysqli_fetch_array($data);

 ?>
<form method="POST" action="">
<div>
	<table>
		<thead>
			<tr>
				<th>EDIT DATA</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Nama</td>
			</tr>
			<tr>
				<td><input type="text" value="<?= $d['nama'] ?>" name="nama"></td>
			</tr>
			<tr>
				<td>Email</td>
			</tr>
			<tr>
				<td><input type="text" value="<?= $d['email'] ?>" name="email"></td>
			</tr>
			<tr>
		</tbody>
		<tfoot>
			<tr>
				<td>
					<input  type="submit" value="SIMPAN" name="">
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
		$SQL = "UPDATE tb_bookingbus SET nama = '$nama',email='$email'WHERE id =$id";
		if (mysqli_query($MySQli,$SQL)) {
			header("location:?page=list");
		} else {
			echo "Gagal edit data booking bus !!";
		}
		
	}
 ?>
 </center>