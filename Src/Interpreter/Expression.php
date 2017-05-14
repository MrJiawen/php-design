<?php

namespace CjwPhpDesign\Src\Interpreter;

/** 抽象表达角色
 * Class Expression
 * @package CjwPhpDesign\Src\Interpreter
 */
abstract class Expression
{
    public function interpreter($str)
    {
        return $str;
    }
}