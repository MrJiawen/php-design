<?php

namespace CjwPhpDesign\Src\Builder;

/** 建造者的具体类：实现一个具体的商品应有的部件
 *  备注：建造者相当于一个大容器，里面存放则商品的一个个部件。而决定其产品的最终结构，是由导演类进行组织的。
 *
 * Class AbstractBuilder
 * @package CjwPhpDesign\Src\Builder
 */
class ConcreteBuilder extends AbstractBuilder
{
    private $_product;

    public function __construct()
    {
        $this->_product = new Product();
    }

    /** 商品的第1个部件
     * @return mixed
     */
    public function buildPart1()
    {
        echo "添加商品的第1个部件<br>";
        return $this->_product->add('part_1');
    }

    /** 商品的第2个部件
     * @return mixed
     */
    public function buildPart2()
    {
        echo "添加商品的第2个部件<br>";
        return $this->_product->add('part_2');
    }

    /** 商品的第3个部件
     * @return mixed
     */
    public function buildPart3()
    {
        echo "添加商品的第3个部件<br>";
        return $this->_product->add('part_3');
    }

    /** 得到产品
     * @return mixed
     */
    public function getProduct()
    {
        return $this->_product;
    }
}