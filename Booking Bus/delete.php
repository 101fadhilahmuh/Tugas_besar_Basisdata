<center>
<?php
	$id = (isset($_GET['id'])) ? $_GET['id'] : '' ;
	if (!empty($id)) {		
		$SQL = "DELETE FROM tb_booking bus WHERE id=$id";
		if (mysqli_query($MySQli,$SQL)) {
			echo "berhasil hapus data booking bus";
			echo "<br>";
			echo "<a href='?page=list'>OK</a>";
		} else {
			echo "Gagal hapus data booking bus !!";
		}
		
	}else{
		header("location:?page=list");
	}
 ?>
 </center>
