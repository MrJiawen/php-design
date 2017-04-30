<?php

namespace CjwPhpDesign\Src\FactoryMethod;

/** 创建轮子工厂的标准接口
 *
 * Interface AbstractWheelFactory
 * @package CjwPhpDesign\Src\FactoryMethood
 */
interface AbstractWheelFactory
{
    public function createWheel($type);
}

