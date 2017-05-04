<?php

namespace CjwPhpDesign\Src\Facade;

/** 灯类
 *
 * Class Light
 * @package CjwPhpDesign\Src\Facade
 */
class Light
{
    public function turnOn()
    {
        echo "打开电灯<br>";
    }

    public function turnOff()
    {
        echo "关闭电灯<br>";
    }

    public function changeBulb()
    {
        echo "电灯的状态切换<br>";
    }
}