<?php

namespace CjwPhpDesign\example;

use CjwPhpDesign\Src\Bridge\ConcreteAbstraction;
use CjwPhpDesign\Src\Bridge\ConcreteImplementorA;
use CjwPhpDesign\Src\Bridge\ConcreteImplementorB;

class BridgePractice
{
    public function __construct()
    {
        echo "桥接模式：<br>";
        $abstractionA = new ConcreteAbstraction(new ConcreteImplementorA());
        $abstractionA->operation();

        $abstractionB = new ConcreteAbstraction(new ConcreteImplementorB());
        $abstractionB->operation();
    }
}