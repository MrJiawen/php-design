# php设计模块式——proxy(代理模式)
## 第一部分 概念
代理模式给某一个对象提供一个代理对象，并由代理对象控制对源对象的引用。

1. 某些情况下，客户不想或者不能够直接引用一个对象，代理对象可以在客户和目标对象直接起到中介的作用。
2. 客户端分辨不出代理主题对象与真实主题对象。
3. 客户端可以并不知道真正的被代理对象，当它仅仅持有一个被代理对象的接口，这时候代理对象不能够创建被代理对象，被代理对象必须有系统的其他角色（比如下面的proxySubject内部代为创建，而没有直接return出realSubject）代为创建并传入。

## 第二部分 代码实现
### 1.查看笔者已经做好的demo；
> 直接在控制器中实例化下对象即可；

```
new ProxyPractice();
```
### 2.demo中具体的实现方式如下所示：
```
class ProxyPractice{
    public function __construct(){
        echo "代理模式：<br><br>";
        $proxySubject = new ProxySubject();
        $proxySubject->action();
    }
}
```
## 第三部分 原理介绍
### 1. 首先，对主题角色进行抽象，提出需要被代理的部分：
```
// 抽象主题角色
abstract class Subject{
    abstract public function action();
}
```
### 2. 查看一个真实的主题角色；
```
// 真实的主题角色
class RealSubject extends Subject{
    public function __construct(){
    }
    public function action(){
        echo "需要被代理的主题角色<br>";
    }
}
```
### 3. 实现代理主题角色；
```
// 代理主题角色
class ProxySubject extends Subject{
    private $_real_subject;
    public function __construct(){
    }
    public function action(){
        $this->_beforeAction();
        if (is_null($this->_real_subject))
            $this->_real_subject = new RealSubject();

        $this->_real_subject->action();
        $this->_afterAction();
    }
    private function _beforeAction(){
        echo "在代理方法前，需要进行的操作<br>";
    }
    private function _afterAction(){
        echo "在代理方法后，需要进行的操作<br>";
    }
}
```
