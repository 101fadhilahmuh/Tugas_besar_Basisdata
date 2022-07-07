<?php 
	
	$id=$_GET['id'];
	$SQL ="SELECT * FROM tb_bookingbus WHERE id = $id";
			$data=mysqli_query($MySQli,$SQL);
			$d = mysqli_fetch_array($data);

 ?>
<div>
	<table>
		<thead>
			<tr>
				<th>DETAIL DATA</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Nama</td>
			</tr>
			<tr>
				<td><input disabled  type="text" value="<?= $d['nama'] ?>" name="nama"></td>
			</tr>
			<tr>
				<td>Email</td>
			</tr>
			<tr>
				<td><input disabled type="text" value="<?= $d['email'] ?>" name="email"></td>
			</tr>
		</tbody>
	</table>
</div>