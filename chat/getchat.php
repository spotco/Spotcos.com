<?php
	$file = file("messagelog.txt");
	$withtags = true;
	$dojson = false;
	$printjson = false;
	if(isset($_REQUEST["json"]) && $_REQUEST["json"] == "yes") {
		header('Content-type: application/json');
		$printjson = array();
		$dojson = true;
	} else {
		header("Content-Type: text/plain");
		if (isset($_REQUEST["notags"])) {
			$withtags = false;
		}
	}
	
	
	if (count($file) > 40) {
		for ($i = count($file)-40; $i < count($file); $i++) {
			if($dojson) {
				$line = $file[$i];
				$line = explode(')',$line);
				$parts = $line = explode('|?|',$line[1]);
				if (count($line) < 2) {
					return;
				}
				$tmp = array('timestamp' => $line[0], 'name' => $parts[0], 'message' => $parts[1]);
				array_push($printjson,$tmp);
			} else if ($withtags) {
				printwithtags($file[$i]);
			} else {
				printwithouttags($file[$i]);
			}

		}
	} else {
		for ($i = 0; $i < count($file); $i++) {
			if($dojson) {
				$line = $file[$i];
				$line = explode(')',$line);
				$parts = $line = explode('|?|',$line[1]);
				if (count($line) < 2) {
					return;
				}
				$tmp = array('timestamp' => $line[0], 'name' => $parts[0], 'message' => $parts[1]);
				array_push($printjson,$tmp);
			} else if ($withtags) {
				printwithtags($file[$i]);
			} else {
				printwithouttags($file[$i]);
			}
		}
	}
	
	if($dojson) {
		$tmp = array('posts'=>$printjson);
		echo json_encode($tmp);
	}

function printjson($line,$printjson) {

}

function printwithtags($line) {
	$line = explode(')',$line);
	if (count($line) < 2) {
		return;
	}
	?><span class="timestamp"><?=$line[0].")"?></span><?php
	$line = explode('|?|',$line[1]);
	?><span class="name"><?=$line[0]?></span>:
	  <span class="message"><?=$line[1]?></span>
	<?php

	?><br /><?php
}

function printwithouttags($line) {
	$line = explode(')',$line,2);
	if (count($line) < 2) {
		return;
	}
	$a = $line[0].")";
	$line = explode('|?|',$line[1]);
	$b = $line[0];
	$c = $line[1];
	echo "$a$b:$c";
}
?>
