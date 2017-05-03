<?php

namespace CjwPhpDesign\example;

use CjwPhpDesign\Src\AbstractFactory\BigFactory;
use CjwPhpDesign\Src\AbstractFactory\SmallFactory;

class AbstractFactoryPractice
{
    public function __construct()
    {
        echo '第一类别：生产一套大型号的商品<br>';

        $bigFactory = new BigFactory();

        echo '1. 首先生产出大型号的轮子<br>';
        $bigWheel = $bigFactory->createWheel();
        $bigWheel->wheelSize();
        $bigWheel->wheelPrice();

        echo '2. 然后生产出大型号的螺丝<br>';
        $bigScrew = $bigFactory->createScrew();
        $bigScrew->screwSize();
        $bigScrew->screwPrice();

        echo '<br><br>第二类别：生产一套小型号的商品<br>';

        $smallFactory = new SmallFactory();

        echo '1. 首先生产出小型号的轮子<br>';
        $SmallWheel = $smallFactory->createWheel();
        $SmallWheel->wheelSize();
        $SmallWheel->wheelPrice();

        echo '2. 然后生产出小型号的螺丝<br>';
        $SmallScrew = $smallFactory->createScrew();
        $SmallScrew->screwSize();
        $SmallScrew->screwPrice();
    }
}
