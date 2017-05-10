<?php

namespace CjwPhpDesign\Src\Memento;

/**负责人(Caretaker)角色
 * Class Caretaker
 * @package CjwPhpDesign\Src\Memento
 */
class Caretaker
{
    private $_memento;

    public function getMemento()
    {
        return $this->_memento;
    }

    public function setMemento(Memento $memento)
    {
        $this->_memento = $memento;
    }
}
