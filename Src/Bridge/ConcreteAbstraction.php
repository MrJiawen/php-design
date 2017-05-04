<?php

namespace CjwPhpDesign\Src\Bridge;

/** 具体化一个抽象化实例，描述实际依赖情景
 *  修正抽象化角色, 扩展抽象化角色，改变和修正父类对抽象化的定义。
 * Class Abstraction
 * @package CjwPhpDesign\Src\Bridge
 */
class ConcreteAbstraction extends Abstraction
{
    public function __construct(ImplementorGeneral $implementorGeneral)
    {
        $this->implementor = $implementorGeneral;
    }

    public function operation()
    {
        $this->implementor->operationImplement();
    }
}