<?php

namespace MF;

class App
{
    /** @var Render */
    private $render;

    /**
     * @param Render $render
     */
    public function __construct(Render $render)
    {
        $this->render = $render;
    }

    public function renderResponse()
    {
        $this->render->renderHelloWorld();
    }

}
