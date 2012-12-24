<?php
	if (isset($_REQUEST["name"]) && isset($_REQUEST["msg"])) {
		$fh = fopen("messagelog.txt","a");
		$writeme = $_REQUEST["name"] . '|?|' . $_REQUEST["msg"]."\n";
		$writeme = htmlspecialchars($writeme);
		$timestamp = '('.date("m-d g:i").')';
		fwrite($fh, $timestamp.$writeme);
		fclose($fh);
		echo "msg sent";
	} else {
		die("invalid chat request");
	}
?>
