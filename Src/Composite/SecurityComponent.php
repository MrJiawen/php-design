<?php

namespace CjwPhpDesign\Src\Composite;

/** 安全式合成模式
 *
 * Interface SecurityComponent
 * @package CjwPhpDesign\Src\Composite
 */
interface SecurityComponent
{
    public function getComposite(); //返回自己的实例

    public function operation();    // 示例方法
}