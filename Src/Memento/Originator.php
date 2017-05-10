<?php

namespace CjwPhpDesign\Src\Memento;

/** 发起人(Originator)角色
 * Class Originator
 * @package CjwPhpDesign\Src\Memento
 */
class Originator
{
    private $_state;

    public function __construct()
    {
        $this->_state = '';
    }

    /** 创建备忘录
     * @return Memento
     */
    public function createMemento()
    {
        return new Memento($this->_state);
    }

    /**将发起人恢复到备忘录对象记录的状态上
     * @param Memento $memento
     */
    public function restoreMemento(Memento $memento)
    {
        $this->_state = $memento->getState();
    }

    public function setState($state)
    {
        $this->_state = $state;
    }

    public function getState()
    {
        return $this->_state;
    }

    public function showState()
    {
        echo $this->_state;
        echo "<br>";
    }

}