<?php

namespace CjwPhpDesign\Src\Composite;

/** 树叶部分(成员)
 *
 * Class TransparentLeaf
 * @package CjwPhpDesign\Src\Composite
 */
class TransparentLeaf implements TransparentComponent
{
    private $_name;

    public function __construct($name)
    {
        $this->_name = $name;
    }

    public function operation()
    {
        // TODO: Implement operation() method.
        echo $this->_name . "这个叶子开始operation<br>";
    }

    public function getComposite()
    {
        // TODO: Implement getComposite() method.
        echo $this->_name . "我是树叶，不是树干，不能获取树干（自己）<br>";

        return null;
    }

    public function add(TransparentComponent $transparentComponent)
    {
        // TODO: Implement add() method.
        echo $this->_name . "我是树叶，不是树干，不能添加子对象<br>";

        return false;
    }

    public function remove(TransparentComponent $transparentComponent)
    {
        // TODO: Implement remove() method.
        echo $this->_name . "我是树叶，不是树干，不能移除子对象<br>";

        return false;
    }

    public function getChild()
    {
        // TODO: Implement getChild() method.
        echo $this->_name . "我是树叶，不是树干，不能获取子对象<br>";

        return null;
    }
}