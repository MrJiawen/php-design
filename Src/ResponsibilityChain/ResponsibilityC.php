<?php

namespace CjwPhpDesign\Src\ResponsibilityChain;

/** 具体的责任角色C
 *
 * Class ResponsibilityC
 * @package CjwPhpDesign\Src\ResponsibilityChain
 */
class ResponsibilityC extends Responsibility
{
    public function operate()
    {
        // TODO: Implement operate() method.
        if (false == is_null($this->next)) {
            $this->next->operate();

            echo "ResponsibilityC is start<br>";
        } else {
            echo "this chain is over<br>";
        }
    }
}