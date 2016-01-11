<?php

require_once __DIR__ . '/vendor/Symfony/class-loader/Psr4ClassLoader.php';

$loader = new \Symfony\Component\ClassLoader\Psr4ClassLoader();
$loader->addPrefix('MF', __DIR__ . '/src');
$loader->register();

$app = new MF\App(new MF\Render());

$app->renderResponse();
