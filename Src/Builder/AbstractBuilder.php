<?php

namespace CjwPhpDesign\Src\Builder;

/** 建造者的抽象类：用于规范一个产品应有的标准部件
 *
 * Class AbstractBuilder
 * @package CjwPhpDesign\Src\Builder
 */
abstract class AbstractBuilder
{
    /** 商品的第1个部件
     * @return mixed
     */
    public abstract function buildPart1();

    /** 商品的第2个部件
     * @return mixed
     */
    public abstract function buildPart2();

    /** 商品的第3个部件
     * @return mixed
     */
    public abstract function buildPart3();

    /** 得到产品
     * @return mixed
     */
    public abstract function getProduct();
}