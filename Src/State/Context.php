<?php

namespace CjwPhpDesign\Src\State;

/**环境角色
 * Class Context
 * @package CjwPhpDesign\Src\State
 */
class Context
{
    private $_state;

    public function __construct()
    {
        // 默认为stateA
        $this->_state = ConcreteStateA::getInstance();
    }

    public function setState(State $state)
    {
        $this->_state = $state;
    }

    public function request()
    {
        $this->_state->handle($this);
    }
}