<?php

require_once __DIR__ . '/vendor/autoload.php';

use MF\App;
use MF\Render\Render;

$app = new App(new Render());

$app->renderResponse();
