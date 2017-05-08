<?php

namespace CjwPhpDesign\Src\Observer;

/** 观察者的主题接口标准
 *
 * Interface Subject
 * @package CjwPhpDesign\Src\Observer
 */
interface Subject
{
    public function addObserver(Observer $observer);

    public function sendMsg($message);
}