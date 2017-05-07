<?php

namespace CjwPhpDesign\Src\TemplateMethod;

/** 抽象模板角色
 *
 * Class AbstractClass
 * @package CjwPhpDesign\Src\TemplateMethod
 */
abstract class AbstractClass
{
    /**
     * 模板方法 调用基本方法组装顶层逻辑
     */
    public function templateMethod()
    {
        $this->primitiveOperation1();
        $this->primitiveOperation2();
    }

    /** 基本方法
     * @return mixed
     */
    abstract protected function primitiveOperation1();

    abstract protected function primitiveOperation2();
}