<?php
$myfile = fopen("location.txt", "w");
$txt = "lat: " . $_GET["lat"] "Long: " . $_GET["long"]
fwrite($myfile, $txt);
fclose($myfile);
$_GET["long"];
?>
