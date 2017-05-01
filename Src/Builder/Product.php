<?php

namespace CjwPhpDesign\Src\Builder;

/** `产品： 它是商品的一个载体。
 *
 * Class Product
 * @package CjwPhpDesign\Src\Builder
 */
class Product
{
    private $_parts;             //产品容器，存放商品的每个部件

    public function __construct()
    {
        $this->_parts = array();
    }

    /** 添加商品的部件
     *
     * @param $part
     * @return int
     */
    public function add($part)
    {
        return array_push($this->_parts, $part);
    }
}