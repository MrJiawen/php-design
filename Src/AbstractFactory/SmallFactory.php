<?php

namespace CjwPhpDesign\Src\AbstractFactory;

/** 按照抽象工厂的标准接口规范，创建一个具体的工厂（小型尺寸）
 *
 * Class SmallFactory
 * @package CjwPhpDesign\Src\AbstractFactory
 */
class SmallFactory implements AbstractFactory
{
    /** 生产一个小型号轮子
     *
     * @return SmallWheel
     */
    public function createWheel()
    {
        // TODO: Implement createWheel() method.
        return new SmallWheel();
    }

    /**  生产一个小型号螺丝
     *
     * @return SmallScrew
     */
    public function createScrew()
    {
        // TODO: Implement createScrew() method.
        return new SmallScrew();
    }
}