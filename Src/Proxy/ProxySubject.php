<?php

namespace CjwPhpDesign\Src\Proxy;

/** 代理主题角色
 *
 * Class ProxySubject
 * @package CjwPhpDesign\Src\Proxy
 */
class ProxySubject extends Subject
{
    private $_real_subject;

    public function __construct()
    {
    }

    public function action()
    {
        // TODO: Implement action() method.
        $this->_beforeAction();
        if (is_null($this->_real_subject))
            $this->_real_subject = new RealSubject();

        $this->_real_subject->action();
        $this->_afterAction();
    }

    private function _beforeAction()
    {
        echo "在代理方法前，需要进行的操作<br>";
    }

    private function _afterAction()
    {
        echo "在代理方法后，需要进行的操作<br>";
    }
}