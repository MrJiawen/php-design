<?php

namespace CjwPhpDesign\Src\Observer;

/** 具体观察者主题——学生
 *
 * Class SubjectStudent
 * @package CjwPhpDesign\Src\Observer
 */
class SubjectStudent implements Subject
{
    private $_observers = array();

    public function addObserver(Observer $observer)
    {
        // TODO: Implement addObserver() method.
        $this->_observers[] = $observer;
    }

    public function sendMsg($message)
    {
        // TODO: Implement sendMsg() method.
        foreach ($this->_observers as $observer) {
            $observer->OnSendMsg($this, $message);
        }
    }

    public function removeObserver($observerName)
    {
        foreach ($this->_observers as $key => $observer) {
            if ($observer->getName() == $observerName) {
                array_splice($this->_observers, $key, 1);
                return true;
            }
        }
        return false;
    }
}