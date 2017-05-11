<?php

namespace CjwPhpDesign\Src\Visitor;

/**具体的访问者1
 * Class ConcreteVisitor1
 * @package CjwPhpDesign\Src\Visitor
 */
class ConcreteVisitor1 implements Visitor
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