<?php

namespace CjwPhpDesign\Src\AbstractFactory;

/** 按照抽象工厂的标准接口规范，创建一个具体的工厂（大型尺寸）
 *
 * Class BigFactory
 * @package CjwPhpDesign\Src\AbstractFactory
 */
class BigFactory implements AbstractFactory
{
    /** 生产一个大型号轮子
     *
     * @return BigWheel
     */
    public function createWheel()
    {
        // TODO: Implement createWheel() method.
        return new BigWheel();
    }

    /** 生产一个大型号螺丝
     *
     * @return BigScrew
     */
    public function createScrew()
    {
        // TODO: Implement createScrew() method.
        return new BigScrew();
    }
}