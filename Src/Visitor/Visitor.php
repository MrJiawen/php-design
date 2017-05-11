<?php

namespace CjwPhpDesign\Src\Visitor;

/** 抽象访问者角色
 * Interface Visitor
 * @package CjwPhpDesign\Src\Visitor
 */
interface Visitor
{
    public function visitConcreteElementA(ConcreteElementA $elementA);

    public function visitConcreteElementB(concreteElementB $elementB);
}