<?php

namespace CjwPhpDesign\example;

use CjwPhpDesign\Src\Prototype\ConcretePrototype;

class PrototypePractice
{
    public function __construct()
    {
        //创建原型
        $obj1 = new ConcretePrototype('my name is prototype;');

        //复制原型
        $obj2 = $obj1->copy();
        dd($obj1,$obj2);
    }
}