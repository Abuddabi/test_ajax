<?php
	ini_set('display_errors', '1');
	error_reporting(E_ALL);

	function out($arg, $method = 1)
	{
		echo "<pre>";
		if ($method === 1) var_dump($arg);
		else print_r($arg);
		exit;
	}
?>