<?php

$file = file_get_contents("/etc/passwd");
$file = explode("\n", $file);

foreach($file as $row) {
	$pos = strpos($row, ":");
	$user = substr($row, 0, $pos);
	echo $user, "<br>";
}

?>