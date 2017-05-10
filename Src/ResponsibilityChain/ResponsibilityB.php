<?php

namespace CjwPhpDesign\Src\ResponsibilityChain;

/** 具体的责任角色B
 *
 * Class ResponsibilityB
 * @package CjwPhpDesign\Src\ResponsibilityChain
 */
class ResponsibilityB extends Responsibility
{
    public function operate()
    {
        // TODO: Implement operate() method.
        if (false == is_null($this->next)) {
            $this->next->operate();

            echo "ResponsibilityB is start<br>";
        }
    }
}