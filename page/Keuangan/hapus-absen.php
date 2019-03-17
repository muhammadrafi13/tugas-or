<?php 
	
	require '../../model/fungsi.php';

	$id = $_GET ["id"];

	
		if ( hapus_absen($id) > 0) {
		  echo "
			<script>
			alert('data berhasil dihapus!');
			document.location.href = 'MEMBER.php';
			</script>
		  ";
		}
		else {
		  echo "
		  <script>
			alert('data gagal dihapus');
			document.location.href = 'MEMBER.php';
			</script>
		  ";
		}

 ?>