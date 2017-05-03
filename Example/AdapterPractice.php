<?php

namespace CjwPhpDesign\example;

use CjwPhpDesign\Src\Adapter\ClassAdapter;
use CjwPhpDesign\Src\Adapter\ObjectAdapter;
use CjwPhpDesign\Src\Adapter\Parts;

class AdapterPractice
{
    public function __construct()
    {
        echo "适配器模式分为两种：第一种为对象适配器；第二种为类适配器；<br>";
        echo "首先，进行对象适配器:<br>";

        $parts = new Parts();
        $objAdapter = new ObjectAdapter($parts);

        $objAdapter->method1();
        $objAdapter->method2();

        echo "<br>然后，进行类适配器:<br>";

        $classAdapter = new ClassAdapter();
        $classAdapter->method1();
        $classAdapter->method2();
    }
}
