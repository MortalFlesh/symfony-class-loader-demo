<?php

require_once __DIR__ . '/vendor/Symfony/class-loader/Psr4ClassLoader.php';

use MF\App;
use MF\Render\MessageRender;
use Symfony\Component\ClassLoader\Psr4ClassLoader;

$loader = new Psr4ClassLoader();
$loader->addPrefix('MF', __DIR__ . '/src');
$loader->register();

$app = new App(new MessageRender('Hello world by Psr4ClassLoader!'));

$app->renderResponse();
