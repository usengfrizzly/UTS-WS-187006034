<?php 

	require_once('koneksi.php');

	$query = "SELECT * FROM biomhs";
	$sql   = mysqli_query($db_connect, $query);

	if ($sql){
		$result = array();
		while ($row = mysqli_fetch_array($sql)){
			array_push ($result,array(
				'id' => $row['id'],
				'npm' => $row['npm'],
				'nama' => $row['nama'],
				'asal' => $row['asal'],
				'notelp' => $row['notelp'],
				'release_at' => $row['release_at'],
			) );
		}

	echo json_encode( array('k-pop' => $result) );
    }
?>