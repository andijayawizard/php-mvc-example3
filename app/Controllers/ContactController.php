<?php 

namespace App\Controllers;

use App\Models\Product;
use Symfony\Component\Routing\RouteCollection;

class ContactController
{
	public function index(RouteCollection $routes)
	{
		$routeToProduct = str_replace('{id}', 1, $routes->get('product')->getPath());
		$email='andijayawizard@gmail.com';
		$phone='0812-0812-0812';

        require_once APP_ROOT . '/views/contact.php';
	}
}
