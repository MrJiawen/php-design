<?php

namespace CjwPhpDesign\example;

use CjwPhpDesign\Src\Command\ConcreteCommand;
use CjwPhpDesign\Src\Command\Invoker;
use CjwPhpDesign\Src\Command\Receiver;

class CommandPractice
{
    public function __construct()
    {
        echo "命令模式：<br>";

        $receiver = new Receiver('hello world');
        $command = new ConcreteCommand($receiver);
        $invoker = new Invoker($command);
        $invoker->action();     //发布命令
    }
}
