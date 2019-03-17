<?php 

    require '../model/fungsi.php';

    $id = $_GET ["id"];

    // $uang_masuk = lihat("SELECT * FROM uang_masuk WHERE id=$id");

    if ( isset($_POST["ubah"]) ) {
        if ( edit($_POST) > 0) {
          echo "
            <script>
            alert('data berhasil diubah');
            document.location.href = '../page/keuangan/MEMBER.php';
            </script>
          ";
        }
        else {
          echo "
          <script>
            alert('data gagal diubah');
            document.location.href = '../page/keuangan/MEMBER.php';
            </script>
          ";
        }
    } 

?>