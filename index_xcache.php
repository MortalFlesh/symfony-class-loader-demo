<?php

require_once __DIR__ . '/vendor/autoload.php';

use MF\App;
use MF\Render\MessageRender;
use Symfony\Component\ClassLoader\Psr4ClassLoader;
use Symfony\Component\ClassLoader\XcacheClassLoader;

$loader = new Psr4ClassLoader();
$loader->addPrefix('MF', __DIR__ . '/src');

$loader = new XcacheClassLoader('cache.prefix', $loader);
$loader->register();

$app = new App(new MessageRender('Hello world by XcacheClassLoader!'));

$app->renderResponse();
