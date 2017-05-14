<?php

namespace CjwPhpDesign\example;

use CjwPhpDesign\Src\Interpreter\Interpreter;

class InterpreterPractice
{
    public function __construct()
    {
        echo "解释器模式:<br>";

        $obj = new Interpreter();

        $obj->execute('123qwe456zxc');
    }
}