<?php

namespace CjwPhpDesign\Src\FactoryMethod;

/**按照标准的轮子工厂接口，进行创建一个具体的工厂；
 *
 * Class MyWheelFactory
 * @package CjwPhpDesign\Src\FactoryMethod
 */
class MyWheelFactory implements AbstractWheelFactory
{
    public function createWheel($type)
    {
        // TODO: Implement createWheel() method.
        switch ($type) {
            case 'big':
                return new BigWheel();

            case 'small':
                return new SmallWheel();

            default:
                exit("error");
        }
    }
}