<?php

require_once __DIR__ . '/vendor/Symfony/class-loader/ClassLoader.php';

use MF\App;
use MF\Render\Render;
use Symfony\Component\ClassLoader\ClassLoader;

$loader = new ClassLoader();
$loader->addPrefix('MF', __DIR__ . '/src_psr0');
$loader->register();

$app = new App(new Render());

$app->renderResponse();
