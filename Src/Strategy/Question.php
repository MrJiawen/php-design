<?php

namespace CjwPhpDesign\Src\Strategy;

/** 环境角色
 *
 * Class Question
 * @package CjwPhpDesign\Src\Strategy
 */
class Question
{
    private $_strategy;

    public function __construct(Strategy $strategy)
    {
        $this->_strategy = $strategy;
    }

    public function handle_question()
    {
        $this->_strategy->doMethod();
    }
}