<?php 
  require '../model/fungsi.php';

  if ( isset($_POST["tambah"])) {
    if ( tambah_trainer($_POST) > 0) {
      echo "
        <script>
        alert('data berhasil ditambahkan');
        document.location.href = '/gym/page/keuangan/trainer.php';
        </script>
      ";
    }
    else {
      echo "
      <script>
        alert('data gagal ditambahkan');
        document.location.href = '/gym/page/keuangan/trainer.php';
        </script>
      ";
    }
  
  }
?>