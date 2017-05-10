<?php

namespace CjwPhpDesign\Src\Command;

/**具体的命令角色
 * Class ConcreteCommand
 * @package CjwPhpDesign\Src\Command
 */
class ConcreteCommand implements Command
{
    private $_receiver;

    public function __construct(Receiver $receiver)
    {
        $this->_receiver = $receiver;
    }

    public function execute()
    {
        // TODO: Implement execute() method.
        $this->_receiver->action();
    }
}