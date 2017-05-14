<?php

namespace CjwPhpDesign\Src\Mediator;

/**具体对象角色
 * Class Colleague2
 * @package CjwPhpDesign\Src\Mediator
 */
class Colleague2 extends Colleague
{
    public function notify($message)
    {
        echo 'colleague2：' . $message . "<br>";
    }
}
