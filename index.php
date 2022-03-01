<?php

if (isset($_GET['type'])) {
	switch($_GET['type']) {
	case 'json':
		outputJSON();
		break;
	case 'JSON':
		outputJSON();
		break;
	case 'text':
		outputTXT();
		break;
	case 'TEXT':
		outputTXT();
		break;
	default:
		outputTXT();
		break;
	}
} else {
	outputTXT();
}

function getIP() {
	if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    	$ip = $_SERVER['HTTP_CLIENT_IP'];
	} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
		$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	} else {
		$ip = $_SERVER['REMOTE_ADDR'];
	}
	return $ip;
}

function outputJSON() {
	header('Content-Type: application/json');
	$output = json_encode(getIP());
	echo "[" . $output . "]";
}

function outputTXT() {
	header('Content-Type: text/plain');
	$output = getIP();
	echo $output;
}