<?php 

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

// Routes system
$routes = new RouteCollection();
$routes->add('product', new Route(constant('URL_SUBFOLDER') . '/product/{id}', 
	array('controller' => 'ProductController', 'method'=>'showAction'), 
	array('id' => '[0-9]+')));
$routes->add('homepage', new Route(constant('URL_SUBFOLDER') . '/', 
	array('controller' => 'PageController', 'method'=>'indexAction'), 
	array()));
$routes->add('about', new Route(constant('URL_SUBFOLDER') . '/about-us', 
	array('controller' => 'AboutController', 'method'=>'index'), 
	array()));
$routes->add('contact', new Route(constant('URL_SUBFOLDER') . '/contact-us', 
	array('controller' => 'ContactController', 'method'=>'index'), 
	array()));
