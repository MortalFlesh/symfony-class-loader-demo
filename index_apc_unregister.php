<?php

require_once __DIR__ . '/vendor/symfony/class-loader/ApcClassLoader.php';
require_once __DIR__ . '/vendor/symfony/class-loader/Psr4ClassLoader.php';

use MF\App;
use MF\Render\MessageRender;
use Symfony\Component\ClassLoader\ApcClassLoader;
use Symfony\Component\ClassLoader\Psr4ClassLoader;

$loader = new Psr4ClassLoader();
$loader->addPrefix('MF', __DIR__ . '/src');
$loader->register();

$cachedLoader = new ApcClassLoader('apc.prefix', $loader);
$cachedLoader->register();

$loader->unregister();

$app = new App(new MessageRender('Hello world by ApcClassLoader!'));

$app->renderResponse();
