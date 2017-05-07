<?php

namespace CjwPhpDesign\example;

use CjwPhpDesign\Src\Flyweight\ShareFlyweight;
use CjwPhpDesign\Src\Flyweight\UnshareFlyweight;

class FlyweightPractice
{
    public function __construct()
    {
        // client
        echo "享元模式：(共享对象)<br>";
        $flyweight = new ShareFlyweight();

        echo "<br>获取单元a，并执行其方法<br>";
        $flyweight->getResource('a');
        $flyweight->operate();
        echo "<br>获取单元b，并执行其方法<br>";
        $flyweight->getResource('b');
        $flyweight->operate();
        echo "<br>获取单元c，并执行其方法<br>";
        $flyweight->getResource('c');
        $flyweight->operate();

        // 不共享的对象，单独调用
        echo "享元模式：(不共享对象)<br>";
        echo "<br>获取单元A，并执行其方法<br>";
        $uflyweight = new UnshareFlyweight('A');
        $uflyweight->operate();
        echo "<br>获取单元B，并执行其方法<br>";
        $uflyweight = new UnshareFlyweight('B');
        $uflyweight->operate();
    }
}