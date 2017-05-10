<?php

namespace CjwPhpDesign\example;

use CjwPhpDesign\Src\Memento\Caretaker;
use CjwPhpDesign\Src\Memento\Originator;

class MementoPractice
{
    public function __construct()
    {
        /* 创建目标对象 */
        $org = new Originator();
        $org->setState('open');
        $org->showState();
        /* 创建备忘 */
        $memento = $org->createMemento();
        /* 通过Caretaker保存此备忘 */
        $caretaker = new Caretaker();
        $caretaker->setMemento($memento);
        /* 改变目标对象的状态 */
        $org->setState('close');
        $org->showState();
        $org->restoreMemento($memento);
        $org->showState();
        /* 改变目标对象的状态 */
        $org->setState('close');
        $org->showState();
        /* 还原操作 */
        $org->restoreMemento($caretaker->getMemento());
        $org->showState();
    }
}