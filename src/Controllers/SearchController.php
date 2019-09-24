<?php
	
	namespace App\Controllers;
	
	use \Psr\Http\Message\ServerRequestInterface as Request;
	use \Psr\Http\Message\ResponseInterface as Response;
	
	class SearchController extends BaseController
	{
		
		public function index(Request $request, Response $response)
		{
			return $this->container->view->render($response, 'search/search.html.twig');
		}
		
	}