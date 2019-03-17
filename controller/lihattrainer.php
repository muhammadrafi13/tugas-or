<?php 
$roots = $_SERVER['DOCUMENT_ROOT'].'/gym';

    require $roots.'/model/fungsi.php';

    $trainer= lihat("SELECT * FROM trainer WHERE id = " .$_GET['id']);
    $trainer = $trainer[0];
?>