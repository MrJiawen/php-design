<?php

namespace CjwPhpDesign\Src\Mediator;

/**具体中介者角色
 * Class ConcreteMediator
 * @package CjwPhpDesign\Src\Mediator
 */
class ConcreteMediator extends Mediator
{
    private $_colleague1 = null;
    private $_colleague2 = null;

    public function send($message, $colleague)
    {
        //echo $colleague->notify($message);
        if ($colleague == $this->_colleague1) {
            $this->_colleague1->notify($message);
        } else {
            $this->_colleague2->notify($message);
        }
    }

    public function set(Colleague $colleague1, Colleague $colleague2)
    {
        $this->_colleague1 = $colleague1;
        $this->_colleague2 = $colleague2;
    }
}
