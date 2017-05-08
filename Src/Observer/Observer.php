<?php

namespace CjwPhpDesign\Src\Observer;

/** 观察者的标准接口
 *
 * Interface Observer
 * @package CjwPhpDesign\Src\Observer
 */
interface Observer
{
    /** 观察者监听方法
     * @param Subject $Subject
     * @param $args
     * @return mixed
     */
    public function onSendMsg(Subject $Subject, $args);

    /** 观察者名称
     * @return mixed
     */
    public function getName();
}