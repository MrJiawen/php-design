<?php

namespace CjwPhpDesign\Src\Observer;

/** 具体的观察者studentA
 *
 * Class ObserverStudentA
 * @package CjwPhpDesign\Src\Observer
 */
class ObserverStudentA implements Observer
{
    public function onSendMsg(Subject $Subject, $args)
    {
        // TODO: Implement onSendMsg() method.
        echo $args . " send message to studentA <br>";
    }

    public function getName()
    {
        // TODO: Implement getName() method.
        return "studentA";
    }
}