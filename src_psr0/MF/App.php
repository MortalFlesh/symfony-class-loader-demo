<?php

namespace MF;

use MF\Render\RenderInterface;

class App
{
    /** @var RenderInterface */
    private $render;

    /**
     * @param RenderInterface $render
     */
    public function __construct(RenderInterface $render)
    {
        $this->render = $render;
    }

    public function renderResponse()
    {
        $this->render->render();
    }

}
