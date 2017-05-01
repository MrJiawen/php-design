<?php

namespace CjwPhpDesign\example;

use CjwPhpDesign\Src\Builder\ConcreteBuilder;
use CjwPhpDesign\Src\Builder\Director;

class BuilderPratice
{
    public function __construct()
    {
        echo "使用建造者的模式<br>";

        echo "第一步，首先召集创建者<br>";
        $builder = new ConcreteBuilder();

        echo "第二步，导演者命令创建者开始构建产品<br>";
        $director = new Director($builder);

        echo "第三部，产品成型<br>";

        dump($builder->getProduct());
    }
}
