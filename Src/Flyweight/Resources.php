<?php

namespace CjwPhpDesign\Src\Flyweight;

/** 抽象的享元基类
 *
 * Class Resources
 * @package CjwPhpDesign\Src\Flyweight
 */
abstract class Resources
{
    public $resource = null;

    abstract public function operate();
}