<?php

	require_once('koneksi.php');

	$npm = $_POST['npm'];
    $nama = $_POST['nama'];
    $asal = $_POST['asal'];
    $notelp = $_POST['notelp'];

    $query = "INSERT INTO biomhs(npm,nama,asal,notelp)VALUES('$npm','$nama','$asal','$notelp')";
    $sql    = mysqli_query($db_connect, $query);
    if ($sql){
    echo json_encode ( array('message' => 'created!') );
    }else {
        echo json_encode ( array('message' => 'error!') );
    }
?>
