<?php

namespace CjwPhpDesign\Src\Flyweight;

/** 不共享的单元对象
 *
 * Class UnshareFlyweight
 * @package CjwPhpDesign\Src\Flyweight
 */
class UnshareFlyweight extends Resources
{
    public function __construct($resource_str)
    {
        $this->resource = $resource_str;
    }

    public function operate()
    {
        echo $this->resource . "<br>";
    }
}