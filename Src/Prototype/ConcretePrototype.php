<?php

namespace CjwPhpDesign\Src\Prototype;

/** 具体原型类
 *
 * Class ConcretePrototype
 * @package CjwPhpDesign\Src\Prototype
 */
class ConcretePrototype implements Prototype
{
    private $_name;

    /** 初始化原型
     *
     * ConcretePrototype constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->_name = $name;
    }

    /** 复制原型（复制自己）
     * @return ConcretePrototype
     */
    public function copy()
    {
        // TODO: Implement copy() method.
        return clone $this;
    }
}