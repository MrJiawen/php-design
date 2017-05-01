<?php

namespace CjwPhpDesign\Src\AbstractFactory;

/** 螺丝的一个具体形式
 *
 * Class SmallScrew
 * @package CjwPhpDesign\Src\AbstractFactory
 */
class SmallScrew extends ScrewGenerator
{

    /**
     * 螺丝的大小
     */
    public function screwSize()
    {
        echo " i'm small screw<br>";
    }

    /**
     *  螺丝的价格
     */
    public function screwPrice()
    {
        echo "small screw is very cheap<br>";
    }

}