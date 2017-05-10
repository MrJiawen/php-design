<?php
namespace CjwPhpDesign\Src\State;

/** 抽象状态角色
 * Interface State
 * @package CjwPhpDesign\Src\State
 */
interface State
{
    /**方法示例
     * @param Context $context
     * @return mixed
     */
    public function handle(Context $context);
}
