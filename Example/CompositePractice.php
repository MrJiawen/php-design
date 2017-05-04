<?php

namespace CjwPhpDesign\example;

use CjwPhpDesign\Src\Composite\SecurityComposite;
use CjwPhpDesign\Src\Composite\SecurityLeaf;
use CjwPhpDesign\Src\Composite\TransparentComposite;
use CjwPhpDesign\Src\Composite\TransparentLeaf;
use function Sodium\add;

class CompositePractice
{
    public function __construct()
    {
        echo "合成模式：<br>首先为安全模式：<br>";

        $leaf1 = new SecurityLeaf('Leaf1');
        $leaf2 = new SecurityLeaf('Leaf2');

        $securityComposite = new SecurityComposite();
        $securityComposite->add($leaf1);
        $securityComposite->add($leaf2);
        $securityComposite->operation();

        $securityComposite->remove($leaf2);
        $securityComposite->operation();

        $leaf1->getComposite();
        $leaf2->getComposite();

        echo "<br><br>第二种为透明模式:<br>";

        $leaf1 = new TransparentLeaf('Leaf1');
        $leaf2 = new TransparentLeaf('Leaf2');

        $transparentComposite = new TransparentComposite();
        $transparentComposite->add($leaf1);
        $transparentComposite->add($leaf2);
        $transparentComposite->operation();

        $transparentComposite->remove($leaf1);
        $transparentComposite->operation();
    }
}
