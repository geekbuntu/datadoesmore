<?php
require_once("env.php");

$urls = array(
	'/' => 'index',
	'/about' => 'about'
);

class index {
	function GET($matches) {
		echo "Hello, glue";
	}
}

class about {
	function GET($matches) {
		echo "this is the about page";
	}
}

try {
	glue::stick($urls);
} catch (Exception $e) {
	header($_SERVER['SERVER_PROTOCOL'] . " 404 Not Found");
	echo '<h1>404 - Page not found</h1>';
} catch (BadMethodCallException $e) {
	header($_SERVER['SERVER_PROTOCOL'] . " 500 Internal Server Error");
	echo '<h1>500 - Internal server error</h1>';
}
