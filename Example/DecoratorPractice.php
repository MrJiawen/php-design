<?php

namespace CjwPhpDesign\example;

use CjwPhpDesign\Src\Decorator\Component;
use CjwPhpDesign\Src\Decorator\ConcreteDecoratorA;
use CjwPhpDesign\Src\Decorator\ConcreteDecoratorB;

class DecoratorPractice
{
    public function __construct()
    {
        echo "装饰器模式：有两种修饰方法，一种是前置修饰，一种是后置修饰<br>";

        $component = new Component();

        //前置修饰
        $fontDecorator = new ConcreteDecoratorA($component);
        $fontDecorator->operation();

        echo "<br>";
        //后置修饰
        $backDecorator = new ConcreteDecoratorB($component);
        $backDecorator->operation();
    }
}
