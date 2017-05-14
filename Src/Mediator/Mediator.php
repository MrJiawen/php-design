<?php

namespace CjwPhpDesign\Src\Mediator;

/**中介者角色
 * Class Mediator
 * @package CjwPhpDesign\Src\Mediator
 */
abstract class Mediator
{
    abstract public function send($message, $colleague);
}