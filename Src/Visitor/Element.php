<?php

namespace CjwPhpDesign\Src\Visitor;

/**抽象节点角色
 * Interface Element
 * @package CjwPhpDesign\Src\Visitor
 */
interface Element
{
    public function accept(Visitor $visitor);
}