<?php

namespace CjwPhpDesign\Src\Facade;

/** 元器件类
 *
 * Class Sensor
 * @package CjwPhpDesign\Src\Facade
 */
class Sensor
{
    public function activate()
    {
        echo "使用电气器件<br>";
    }

    public function deactivate()
    {
        echo "不使用电气器件<br>";
    }

    public function trigger()
    {
        echo "电气器件的状态切换<br>";
    }
}