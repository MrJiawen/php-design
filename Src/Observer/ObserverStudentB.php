<?php

namespace CjwPhpDesign\Src\Observer;

/** 具体的观察者studentB
 *
 * Class ObserverStudentB
 * @package CjwPhpDesign\Src\Observer
 */
class ObserverStudentB implements Observer
{
    public function onSendMsg(Subject $Subject, $args)
    {
        // TODO: Implement onSendMsg() method.
        echo $args . " send message to studentB <br>";
    }

    public function getName()
    {
        // TODO: Implement getName() method.
        return "studentB";
    }
}