<?php

namespace CjwPhpDesign\example;

use CjwPhpDesign\Src\ResponsibilityChain\ResponsibilityA;
use CjwPhpDesign\Src\ResponsibilityChain\ResponsibilityB;
use CjwPhpDesign\Src\ResponsibilityChain\ResponsibilityC;

class ResponsibilityChainPractice
{
    public function __construct()
    {
        echo "责任链模式:<br>";

        $chains = new ResponsibilityA();

        $chains->setNext(new ResponsibilityB())->setNext(new ResponsibilityC());

        $chains->operate();
    }
}