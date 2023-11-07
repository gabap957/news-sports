<?php
$fileAdmin = fopen("index.html", "r") or die("Unable to open file!");
echo fread($fileAdmin, filesize("index.html"));
fclose($fileAdmin);
