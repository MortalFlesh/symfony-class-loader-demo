<?php

require_once __DIR__ . '/vendor/symfony/class-loader/MapClassLoader.php';

use MF\App;
use MF\Render\Render;
use Symfony\Component\ClassLoader\MapClassLoader;

$loader = new MapClassLoader([
    'MF\\App' => __DIR__ . '/src/App.php',
    'MF\\Render\\RenderInterface' => __DIR__ . '/src/Render/RenderInterface.php',
    'MF\\Render\\Render' => __DIR__ . '/src/Render/Render.php',
]);
$loader->register();

$app = new App(new Render());

$app->renderResponse();
