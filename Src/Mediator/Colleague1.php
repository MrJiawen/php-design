<?php

namespace CjwPhpDesign\Src\Mediator;

/**具体对象角色
 * Class Colleague1
 * @package CjwPhpDesign\Src\Mediator
 */
class Colleague1 extends Colleague
{
    public function notify($message)
    {
        echo 'colleague1：' . $message . "<br>";
    }
}