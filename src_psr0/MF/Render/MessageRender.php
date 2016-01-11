<?php

namespace MF\Render;

class MessageRender implements RenderInterface
{
    /** @var string */
    private $message;

    /**
     * @param string $message
     */
    public function __construct($message)
    {
        $this->message = $message;
    }

    public function render()
    {
        echo sprintf('<p>%s</p>', $this->message);
    }
}
