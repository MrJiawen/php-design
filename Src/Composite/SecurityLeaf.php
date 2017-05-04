<?php

namespace CjwPhpDesign\Src\Composite;

/** 树叶部分(成员)
 * Class SecurityLeaf
 * @package CjwPhpDesign\Src\Composite
 */
class SecurityLeaf implements SecurityComponent
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
}