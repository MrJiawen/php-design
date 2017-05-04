<?php

namespace CjwPhpDesign\Src\Composite;

/** 透明式合成模式(抽象组件角色)
 *
 * Interface TransparentComponent
 * @package CjwPhpDesign\Src\Composite
 */
interface TransparentComponent
{
    public function getComposite(); // 返回自己的实例

    public function operation(); // 示例方法

    public function add(TransparentComponent $transparentComponent); // 聚集管理方法,添加一个子对象

    public function remove(TransparentComponent $transparentComponent); // 聚集管理方法 删除一个子对象

    public function getChild(); // 聚集管理方法 返回所有的子对象
}