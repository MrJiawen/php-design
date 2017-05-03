<?php

namespace CjwPhpDesign\Src\Decorator;

/** 装饰模式的基类
 *
 * Class DecoratorGeneral
 * @package CjwPhpDesign\Src\Decorator
 */
abstract class DecoratorGeneral
{
    private $_component;

    public function __construct(Component $component)
    {
        $this->_component = $component;
    }

    /**
     *  重写方法：(不破坏其原类的基础上)
     */
    public function operation()
    {
        $this->_component->operation();
    }
}