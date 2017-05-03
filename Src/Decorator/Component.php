<?php

namespace CjwPhpDesign\Src\Decorator;

/** 需要被装饰的类
 *
 * Class Component（成分）
 * @package CjwPhpDesign\Src\Decorator
 */
class Component
{
    /**
     * 需要被装饰的方法
     */
    public function operation()
    {
        echo "需要被装饰的类<br>";
    }
}