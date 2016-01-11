<?php

require_once __DIR__ . '/vendor/Symfony/class-loader/Psr4ClassLoader.php';

use Symfony\Component\ClassLoader\Psr4ClassLoader;
use MF\App;
use MF\Render;

$loader = new Psr4ClassLoader();
$loader->addPrefix('MF', __DIR__ . '/src');
$loader->register();

$app = new App(new Render());

$app->renderResponse();
