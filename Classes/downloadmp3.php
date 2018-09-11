<?php
//it is used to download mp3
//It makes sure that the mp3 is downloaded, not played in on-line player

//It downloads from this  LINK   <a href="http://example2.esy.es/download/downloadmp3.php?file=DKay_Honey.mp3" ">Download mp3 version</a>

$file = $_GET['file'];
header ("Content-type: octet/stream");
header ("Content-disposition: attachment; filename=".$file.";");
header("Content-Length: ".filesize($file));

// My add
header("Content-Type: application/mp3");

readfile($file);
exit;
?>