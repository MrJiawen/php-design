<?php

namespace CjwPhpDesign\Src\Visitor;

/** 具体元素B
 * Class ConcreteElementB
 * @package CjwPhpDesign\Src\Visitor
 */
class ConcreteElementB implements Element
{
    private $_name;

    public function __construct($name)
    {
        $this->_name = $name;
    }

    public function getName()
    {
        return $this->_name;
    }

    /**接受访问者调用它针对该元素的新方法
     * @param Visitor $visitor
     */
    public function accept(Visitor $visitor)
    {
        $visitor->visitConcreteElementB($this);
    }
}