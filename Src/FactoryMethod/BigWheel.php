<?php

namespace CjwPhpDesign\Src\FactoryMethod;

/** 轮子的一个具体形式
 *
 * Class BigWheel
 * @package CjwPhpDesign\Src\FactoryMethood
 */
class BigWheel extends WheelGenerator
{

    /**
     * 轮子的大小
     */
    public function wheelSize()
    {
        echo " i'm big wheel<br>";
    }

    /**
     *  轮子的价格
     */
    public function wheelPrice()
    {
        echo "big wheel is very expensive<br>";
    }

}