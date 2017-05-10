<?php

namespace CjwPhpDesign\example;

use CjwPhpDesign\Src\State\Context;

class StatePractice
{
    public function __construct()
    {
        echo "状态模式：<br><br>";
        $context = new Context();
        $context->request();
        $context->request();
        $context->request();
        $context->request();
    }
}
