<?php

namespace CjwPhpDesign\example;

use CjwPhpDesign\Src\FactoryMethod\MyWheelFactory;

class FactoryMethodPractice
{
    public function __construct()
    {
        $factory = new MyWheelFactory();

        echo "首先,生产出大轮子<br>";
        $bigWheel = $factory->createWheel('big');
        $bigWheel->wheelSize();
        $bigWheel->wheelPrice();

        echo "<br><br>然后，生产出小轮子<br>";
        $smallWheel = $factory->createWheel('small');
        $smallWheel->wheelSize();
        $smallWheel->wheelPrice();

        echo "<br><br>接着，生产出其他类型的轮子，如果没有，则会报错<br>";
        $otherWheel = $factory->createWheel('other');
        $otherWheel->wheelSize();
        $otherWheel->wheelPrice();
    }
}
