<?php

namespace CjwPhpDesign\example;

use CjwPhpDesign\Src\Proxy\ProxySubject;

class ProxyPractice
{
    public function __construct()
    {
        echo "代理模式：<br><br>";

        $proxySubject = new ProxySubject();

        $proxySubject->action();
    }
}