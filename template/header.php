<?php
    $root = $_SERVER['DOCUMENT_ROOT'].'/gym';

    include( $root.'../common/host.php');
    include( $root.'../common/koneksi.php');

    use host as Host;
    $data = Host\host::base_url();
    
?>
<head>
    <title>gym</title>
	<!-- <link rel="stylesheet" type="text/css" href="dashboard.css"> -->
    <link rel="stylesheet" type="text/css" href=<?php echo $data . '/asset/main.css'; ?>>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
