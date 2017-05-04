<?php

namespace CjwPhpDesign\Src\Bridge;

/** 抽象化角色，抽象化给出的定义，并保存一个依赖对象的引用。
 * Class Abstraction
 * @package CjwPhpDesign\Src\Bridge
 */
abstract class Abstraction
{
    protected $implementor;             //对实例化对象的引用；

    public function operation()
    {
        $this->implementor->operationImplement();
    }
}