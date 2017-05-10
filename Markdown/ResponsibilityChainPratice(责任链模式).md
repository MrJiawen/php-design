# php设计模块式——ResponsibilityChain(责任链模式)
## 第一部分 概念
在责任链模式中，很多对象由每一个对象对其下家的引用而接
起来形成一条链。

1. 请求在这个链上传递，直到链上的某一个对象决定处理此请求。
2. 客户并不知道链上的哪一个对象最终处理这个请求，系统可以在不影响客户端的情况下动态的重新组织链和分配责任。
3. 处理者有两个选择：承担责任或者把责任推给下家。一个请求可以最终不被任何接收端对象所接受。

## 第二部分 代码实现

### 1.查看笔者已经做好的demo；
> 直接在控制器中实例化下对象即可；

```
new ResponsibilityChainPractice();
```
### 2.demo中具体的实现方式如下所示：
```
class ResponsibilityChainPractice{
    public function __construct(){
        echo "责任链模式:<br>";
        $chains = new ResponsibilityA();
        $chains->setNext(new ResponsibilityB())->setNext(new ResponsibilityC());
        $chains->operate();
    }
}
```
## 第三部分 原理介绍
### 1. 首先,建立抽象责任角色；
```
// 抽象的责任角色
abstract class Responsibility{
    public $next;
    public function setNext(Responsibility $responsibility){
        $this->next = $responsibility;
        return $this->next;
    }
    abstract public function operate();
}
```
### 2.然后，建立一些具体的责任角色；
```
// 具体的责任角色A
class ResponsibilityA extends Responsibility{
    public function operate(){
        if (false == is_null($this->next)) {
            $this->next->operate();
            echo "ResponsibilityA is start<br>";
        }
    }
}
// 具体的责任角色B
class ResponsibilityB extends Responsibility{
    public function operate(){
        if (false == is_null($this->next)) {
            $this->next->operate();
            echo "ResponsibilityB is start<br>";
        }
    }
}
// 具体的责任角色C
class ResponsibilityC extends Responsibility{
    public function operate(){
        if (false == is_null($this->next)) {
            $this->next->operate();
            echo "ResponsibilityC is start<br>";
        } else {
            echo "this chain is over<br>";
        }
    }
}
```
