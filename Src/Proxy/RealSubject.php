<?php

namespace CjwPhpDesign\Src\Proxy;

/** 真实的主题角色
 *
 * Class RealSubject
 * @package CjwPhpDesign\Src\Proxy
 */
class RealSubject extends Subject
{
    public function __construct()
    {
    }

    public function action()
    {
        // TODO: Implement action() method.
        echo "需要被代理的主题角色<br>";
    }
}