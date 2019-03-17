<?php 
$roots = $_SERVER['DOCUMENT_ROOT'].'/gym';

    require $roots.'/model/fungsi.php';

    $MEMBER= lihat("SELECT * FROM MEMBER WHERE id = " .$_GET['id']);
    $MEMBER = $MEMBER[0];
?>