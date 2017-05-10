<?php

namespace CjwPhpDesign\Src\Command;

/**请求者角色
 * Class Invoker
 * @package CjwPhpDesign\Src\Command
 */
class Invoker
{
    private $_command;

    public function __construct(Command $command)
    {
        $this->_command = $command;
    }

    public function action()
    {
        $this->_command->execute();
    }
}