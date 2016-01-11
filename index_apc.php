<?php

require_once __DIR__ . '/vendor/autoload.php';

use MF\App;
use MF\Render\MessageRender;
use Symfony\Component\ClassLoader\ApcClassLoader;
use Symfony\Component\ClassLoader\Psr4ClassLoader;

$loader = new Psr4ClassLoader();
$loader->addPrefix('MF', __DIR__ . '/src');

$loader = new ApcClassLoader('apc.prefix', $loader);
$loader->register();

$app = new App(new MessageRender('Hello world by ApcClassLoader!'));

$app->renderResponse();
