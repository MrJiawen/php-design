<?php

namespace CjwPhpDesign\example;

use CjwPhpDesign\Src\TemplateMethod\ConcreteClass;
use CjwPhpDesign\Src\Visitor\ConcreteElementA;
use CjwPhpDesign\Src\Visitor\ConcreteElementB;
use CjwPhpDesign\Src\Visitor\ConcreteVisitor1;
use CjwPhpDesign\Src\Visitor\ConcreteVisitor2;
use CjwPhpDesign\Src\Visitor\ObjectStructure;

class VisitorPractice
{
    public function __construct()
    {
        echo "访问者方法模式:<br>";

        $elementA = new ConcreteElementA("ElementA");
        $elementB = new ConcreteElementB("ElementB");
        $elementA2 = new ConcreteElementB("ElementA2");
        $visitor1 = new ConcreteVisitor1();
        $visitor2 = new ConcreteVisitor2();
        $os = new ObjectStructure();
        $os->attach($elementA);
        $os->attach($elementB);
        $os->attach($elementA2);
        $os->detach($elementA2);
        $os->accept($visitor1);
        $os->accept($visitor2);

    }
}
