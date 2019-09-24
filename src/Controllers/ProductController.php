<?php
	
	namespace App\Controllers;
	
	use \Psr\Http\Message\ServerRequestInterface as Request;
	use \Psr\Http\Message\ResponseInterface as Response;
	
	class ProductController extends BaseController
	{
		
		public function index(Request $request, Response $response)
		{
			return $this->container->view->render($response, 'product/product.html.twig');
		}
		
	}