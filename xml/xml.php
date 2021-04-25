<?php

Header('Content-type: text/xml');
//koneksi ke database
$connection = mysqli_connect("localhost", "root", "", "klh") or die("Error " . mysqli_error($connection));
$xml = new SimpleXMLElement('<xml/>');

$sql = "SELECT * FROM biomhs";
$result = mysqli_query($connection, $sql) or die("Error " . mysqli_error($connection));

//membuat array
while ($row = mysqli_fetch_assoc($result)) {

    $track = $xml->addChild('kpop');
    $track->addChild('id', $row['id']);
    $track->addChild('npm', $row['npm']);
    $track->addChild('nama', $row['nama']);
    $track->addChild('asal', $row['asal']);
    $track->addChild('notelp', $row['notelp']);
   
}

print($xml->asXML());
//tutup koneksi ke database
mysqli_close($connection);
?>
