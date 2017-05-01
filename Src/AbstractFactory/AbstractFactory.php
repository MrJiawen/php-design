<?php

namespace CjwPhpDesign\Src\AbstractFactory;

/** 建立一个抽象工厂的标准接口
 *
 * Interface AbstractFactory
 * @package CjwPhpDesign\Src\AbstractFactory
 */
interface AbstractFactory
{
    /** 生产一个轮子
     *
     * @return mixed
     */
    public function createWheel();

    /** 生产一个螺丝
     *
     * @return mixed
     */
    public function createScrew();
}