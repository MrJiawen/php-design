<?php

namespace CjwPhpDesign\Src\Memento;

/**备忘录(Memento)角色
 * Class Memento
 * @package CjwPhpDesign\Src\Memento
 */
class Memento
{
    private $_state;

    public function __construct($state)
    {
        $this->setState($state);
    }

    public function getState()
    {
        return $this->_state;
    }

    public function setState($state)
    {
        $this->_state = $state;
    }
}
