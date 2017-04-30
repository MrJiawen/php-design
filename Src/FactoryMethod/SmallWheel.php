<?php

namespace CjwPhpDesign\Src\FactoryMethod;

/** 轮子的一个具体形式
 *
 * Class SmallWheel
 * @package CjwPhpDesign\Src\FactoryMethood
 */
class SmallWheel extends WheelGenerator
{

    /**
     * 轮子的大小
     */
    public function wheelSize()
    {
        echo " i'm small wheel<br>";
    }

    /**
     *  轮子的价格
     */
    public function wheelPrice()
    {
        echo "small wheel is very cheap<br>";
    }

}