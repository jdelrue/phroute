<?php

    include __DIR__ . '/../../vendor/autoload.php';


    use Phroute\Phroute\RouteCollector;
    use Phroute\Phroute\Dispatcher;

    $router = new RouteCollector();

    class Selectors {
    	public function getIndex($selectors){
    		print_r($selectors);
    		return "go";
    	}


    }


    $router->controller('/selectors', 'Selectors');



    $dispatcher = new Dispatcher($router->getData());
	
	
	// Todo code should be part of phroute...
	$url =  $_SERVER['REQUEST_URI'];
	

    $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);

    echo $response;
?>
