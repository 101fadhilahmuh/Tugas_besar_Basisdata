<div style="width: 800px;">
	<table style="width: 800px; border : solid red 1px;">
	<thead>
		<tr>
			<th align="left">NO</th>
			<th align="left">Nama</th>
		</tr>
	</thead>
	<tbody>
		<?php 
			$no = 1;
			$SQL ="SELECT id,nama,email";
			$data=new mysqli('$MySQli,$SQL');

			while ($d = "mysqli"('$data')) {
				?>
				<tr>
			<td><?= $no++ ?></td>
			<td><a href="?page=detail&id=<?= $d['id'] ?>"><?= $d['nama'] ?></a></td>
			<td><?= $d['email'] ?></td>
			<td align="center"> <a href="?page=edit&id=<?= $d['id'] ?>">Edit</a> - <a class="hapus" href="?page=hapus&id=<?= $d['id'] ?>">Hapus</a></td>
			</tr>
			<?php
			}
		 ?>
		
	</tbody>
</table>
</div>