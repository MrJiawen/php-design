<?php

namespace CjwPhpDesign\Src\Facade;

/** 相机类
 * Class Camera
 * @package CjwPhpDesign\Src\Facade
 */
class Camera
{
    public function turnOn()
    {
        echo "打开照相机<br>";
    }

    public function turnOff()
    {
        echo "关闭照相机<br>";
    }

    public function rotate()
    {
        echo "切换照相机状态<br>";
    }
}