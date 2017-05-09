<?php

namespace CjwPhpDesign\example;

use CjwPhpDesign\Src\Iteration\ConcreteIterator;

class IterationPractice
{
    public function __construct()
    {
        echo "迭代器模式：<br><br>";

        $array = ['a' => 'a1', 'b' => 'b2', 'c' => 'c3'];

        $iterator = new ConcreteIterator($array);

        echo "第一行,index:" . $iterator->key() . ",value:" . $iterator->current() . "<br>";
        $iterator->next();
        echo "第二行,index:" . $iterator->key() . ",value:" . $iterator->current() . "<br>";
        $iterator->next();
        echo "第三行,index:" . $iterator->key() . ",value:" . $iterator->current() . "<br>";
        $iterator->next();
        echo "第四行,index:" . $iterator->key() . ",value:" . $iterator->current() . "<br>";
        dd($iterator->valid());
    }
}