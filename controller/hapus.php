<?php 
	
	require '../model/fungsi.php';

	$id = $_GET ["id"];

	if ( isset($_POST["hapus"])) {
		if ( hapus_absen($id) > 0) {
		  echo "
			<script>
			alert('data berhasil dihapus!');
			document.location.href = '../page/MEMBER.php';
			</script>
		  ";
		}
		else {
		  echo "
		  <script>
			alert('data gagal dihapus');
			document.location.href = '../page/MEMBER.php';
			</script>
		  ";
		}

 ?>