<?php
	
	$app->get('/', 'HomeController:index');
	
	$app->get('/product', 'ProductController:index');
	
	$app->get('/search', 'SearchController:index');

