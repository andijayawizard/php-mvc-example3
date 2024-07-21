<?php 

namespace App\Controllers;

use App\Models\Product;
use Symfony\Component\Routing\RouteCollection;

class AboutController
{
	public function index(RouteCollection $routes)
	{
		$routeToProduct = str_replace('{id}', 1, $routes->get('product')->getPath());

        require_once APP_ROOT . '/views/about.php';
	}
}
