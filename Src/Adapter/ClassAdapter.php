<?php

namespace CjwPhpDesign\Src\Adapter;

/** 类适配器
 *  备注：通过继承的方法完成适配功能
 *
 * Class ClassAdapter
 * @package CjwPhpDesign\Src\Adapter
 */
class ClassAdapter extends Parts implements Target
{
    public function method2()
    {
        // TODO: Implement method2() method.
        echo "类适配器适配后，新添的method2<br>";
    }
}
