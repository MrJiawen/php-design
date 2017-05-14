<?php

namespace CjwPhpDesign\example;

use CjwPhpDesign\Src\Mediator\Colleague1;
use CjwPhpDesign\Src\Mediator\Colleague2;
use CjwPhpDesign\Src\Mediator\ConcreteMediator;

class MediatorPractice
{
    public function __construct()
    {
        echo "中介者模式:<br><br>";
        
        $objMediator = new ConcreteMediator();
        $objC1 = new Colleague1($objMediator);
        $objC2 = new Colleague2($objMediator);
        $objMediator->set($objC1,$objC2);
        $objC1->send("to c2 from c1");
        $objC2->send("to c1 from c2");
    }
}