<?php
$start = xdebug_time_index();
require_once("env.php");

$urls = array(
	'/' => 'home',
	'/home' => 'home',
	'/bluehornet' => 'bluehornet',
	'/bluehornet/message/[0-9]+' => 'message'
);

class index {
	function GET($matches) {
		global $tplPath;
		Twig_Autoloader::register();
		
		$loader = new Twig_Loader_Filesystem($tplPath);
		$twig = new Twig_Environment($loader, array('debug' => TRUE, 'auto_reload' => TRUE));
		$template = $twig->loadTemplate('index.tpl');
		
		echo $template->render(array());
	}
}

class home {
	function GET($matches) {
		global $tplPath;
		Twig_Autoloader::register();
		
		$loader = new Twig_Loader_Filesystem($tplPath);
		$twig = new Twig_Environment($loader, array('auto_reload' => TRUE));
		$template = $twig->loadTemplate('home.tpl');
		
		echo $template->render(array());
	}
}

class bluehornet {
	function GET($matches) {
		global $tplPath;
		Twig_Autoloader::register();
		
		$loader = new Twig_Loader_Filesystem($tplPath);
		$twig = new Twig_Environment($loader, array('auto_reload' => TRUE));
		$template = $twig->loadTemplate('bluehornet.tpl');
		echo $template->render(
			array(
				'today' => date('l, M j, Y', mktime(0,0,0,date('m'),date('d'),date('Y'))),
				'yesterday' => date('l, M j, Y', mktime(0,0,0,date('m'),date('d')-1,date('Y'))),
				'twoDaysAgo' => date('l, M j, Y', mktime(0,0,0,date("m"),date("d")-2,date("Y"))),
				'threeDaysAgo' => date('l, M j, Y', mktime(0,0,0,date('m'),date('d')-3,date('Y'))),
				'fourDaysAgo' => date('l, M j, Y', mktime(0,0,0,date('m'),date('d')-4,date('Y')))

			)
		);
	}
}

class message {
	function GET($matches) {
		global $tplPath;
		$str = substr($matches[0],1);
		$parts = explode("/", $str);
		Twig_Autoloader::register();
		
		$loader = new Twig_Loader_Filesystem($tplPath);
		$twig = new Twig_Environment($loader, array('auto_reload' => TRUE));
		$template = $twig->loadTemplate('message.tpl');	

		echo $template->render(
			array(
			)
		);
		
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

$end = xdebug_time_index();

echo "
<hr>
<span class=\"processtime\">
This page took " . round(($end-$start),2) . " seconds to process
</span>"
;
