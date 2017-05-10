<?php

namespace CjwPhpDesign\Src\ResponsibilityChain;

/** 抽象的责任角色
 * Class Responsibility
 * @package CjwPhpDesign\Src\ResponsibilityChain
 */
abstract class Responsibility
{
    public $next;

    public function setNext(Responsibility $responsibility)
    {
        $this->next = $responsibility;

        return $this->next;
    }

    abstract public function operate();
}