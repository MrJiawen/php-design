<?php

namespace CjwPhpDesign\Src\ResponsibilityChain;

/** 具体的责任角色A
 *
 * Class ResponsibilityA
 * @package CjwPhpDesign\Src\ResponsibilityChain
 */
class ResponsibilityA extends Responsibility
{
    public function operate()
    {
        // TODO: Implement operate() method.
        if (false == is_null($this->next)) {
            $this->next->operate();

            echo "ResponsibilityA is start<br>";
        }
    }
}