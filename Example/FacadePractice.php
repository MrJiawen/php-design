<?php

namespace CjwPhpDesign\example;

use CjwPhpDesign\Src\Facade\SecurityFacade;

class FacadePractice
{
    public function __construct()
    {
        echo "门面模式:<br><br>";

        $securityFacade = new SecurityFacade();

        echo "执行所有操作：<br>";
        $securityFacade->activate();

        echo "<br>关闭所有操作，启动安全模式:<br>";
        $securityFacade->deactivate();
    }
}
