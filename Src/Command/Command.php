<?php

namespace CjwPhpDesign\Src\Command;

/**命令标准接口规范
 * Interface Command
 * @package CjwPhpDesign\Src\Command
 */
interface Command
{
    /** 执行方法
     * @return mixed
     */
    public function execute();
}