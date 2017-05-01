<?php

namespace CjwPhpDesign\Src\Builder;

/** 导演者： 不同的导演可以进行演变不同的产品
 *  备注：通过组织建造者的不同部件进行开始构建不同的产品
 *
 * Class Director
 * @package CjwPhpDesign\Src\Builder
 */
class Director
{
    /** 导演者的职责：命令建造者开始构建产品
     *
     * Director constructor.
     * @param AbstractBuilder $builder
     */
    public function __construct(AbstractBuilder $builder)
    {
        $builder->buildPart1();
        $builder->buildPart2();
        $builder->buildPart3();
    }
}