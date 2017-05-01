<?php

namespace CjwPhpDesign\Src\AbstractFactory;

/** 轮子的一个具体形式
 *
 * Class BigWheel
 * @package CjwPhpDesign\Src\AbstractFactory
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