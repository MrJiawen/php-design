<?php

namespace CjwPhpDesign\Src\Mediator;

/** 抽象对象
 * Class Colleague
 * @package CjwPhpDesign\Src\Mediator
 */
abstract class Colleague
{
    private $_mediator = null;

    public function __construct(Mediator $mediator)
    {
        $this->_mediator = $mediator;
    }

    public function send($message)
    {
        $this->_mediator->send($message, $this);
    }

    abstract public function notify($message);
}