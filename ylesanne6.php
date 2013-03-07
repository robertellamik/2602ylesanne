<?php

echo "<form method=\"get\"><input type=\"text\" name=\"url\" placeholder=\"";
echo isset($_GET['url']) == true ? $_GET['url'] : "Sisesta URL...";
echo "\" autofocus /><input type=\"hidden\" name=\"sel\" value=\"".$_GET['sel']."\" /><input type=\"submit\" value=\"Kuva\" />
</form>";

if(isset($_GET['url'])) {
	$url = strpos($_GET['url'], 'http://') !== false ? $_GET['url'] : "http://".$_GET['url'];

	@$data = file_get_contents($url,0);
	if(!$data) {
		echo "Vigane aadress.";
	} else {
		echo "<xmp style=\"width: 700px;\">$data</xmp>";
	}
}