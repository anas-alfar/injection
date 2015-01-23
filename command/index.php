<?php
if (empty($_GET['filename'])) {
	print("Please specify the name of the file to read...");
} else {
	$file = $_GET['filename'];
	echo shell_exec("cat $file");
}

//continue coding…
