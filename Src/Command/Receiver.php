<?php

namespace CjwPhpDesign\Src\Command;

/** 接收者角色
 * Class Receiver
 * @package CjwPhpDesign\Src\Command
 */
class Receiver
{
    private $_name;

    public function __construct($name)
    {
        $this->_name = $name;
    }

    public function action()
    {
        echo 'receive some cmd:' . $this->_name;
    }
}