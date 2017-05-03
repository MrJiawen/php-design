<?php

namespace CjwPhpDesign\Src\Adapter;

/** 对象适配器
 *
 * Class ObjectAdapter
 * @package CjwPhpDesign\Src\Adapter
 */
class ObjectAdapter implements Target
{
    private $_part1;

    public function __construct(Parts $part)
    {
        $this->_part1 = $part;
    }

    /**
     *  适配原对象的必要部分
     */
    public function method1()
    {
        // TODO: Implement method1() method.
        $this->_part1->method1();
    }

    public function method2()
    {
        // TODO: Implement method2() method.
        echo "对象适配器适配后，新添的method2<br>";
    }
}