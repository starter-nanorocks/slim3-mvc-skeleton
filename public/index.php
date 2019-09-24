<?php

require 'vendor/autoload.php';

// Config for Slim App
$config = require_once __DIR__ . '/../src/config.php';

// Slim App instance
$app = new \Slim\App($config);

// Dependencies here
require_once __DIR__ . '/../src/dependencies.php';

// Routes here
require_once __DIR__ . '/../src/routes/web.php';

// Run app
$app->run();


