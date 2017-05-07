<?php

namespace CjwPhpDesign\example;

use CjwPhpDesign\Src\TemplateMethod\ConcreteClass;

class TemplateMethodPractice
{
    public function __construct()
    {
        echo "模板方法模式:<br>";

        $class = new ConcreteClass();

        $class->templateMethod();
    }
}
