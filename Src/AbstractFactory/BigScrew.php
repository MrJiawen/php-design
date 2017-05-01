<?php

namespace CjwPhpDesign\Src\AbstractFactory;

/** 螺丝的一个具体形式
 *
 * Class BigScrew
 * @package CjwPhpDesign\Src\AbstractFactory
 */
class BigScrew extends ScrewGenerator
{

    /**
     * 螺丝的大小
     */
    public function screwSize()
    {
        echo " i'm big screw<br>";
    }

    /**
     *  螺丝的价格
     */
    public function screwPrice()
    {
        echo "big screw is very expensive<br>";
    }

}