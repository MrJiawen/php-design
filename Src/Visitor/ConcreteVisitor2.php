<?php

namespace CjwPhpDesign\Src\Visitor;

/** 具体的访问者2
 * Class ConcreteVisitor2
 * @package CjwPhpDesign\Src\Visitor
 */
class ConcreteVisitor2 implements Visitor
{
    public function visitConcreteElementA(ConcreteElementA $elementA)
    {
        echo $elementA->getName().'<br>';
    }

    public function visitConcreteElementB(ConcreteElementB $elementB)
    {
        echo $elementB->getName().'<br>';
    }
}