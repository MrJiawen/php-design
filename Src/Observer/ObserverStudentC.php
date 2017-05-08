<?php

namespace CjwPhpDesign\Src\Observer;

/** 具体的观察者studentC
 *
 * Class ObserverStudentC
 * @package CjwPhpDesign\Src\Observer
 */
class ObserverStudentC implements Observer
{
    public function onSendMsg(Subject $Subject, $args)
    {
        // TODO: Implement onSendMsg() method.
        echo $args . " send message to studentC <br>";
    }

    public function getName()
    {
        // TODO: Implement getName() method.
        return "studentC";
    }
}