# php设计模块式——bridge(桥接模式)
## 第一部分 概念
将抽象化与实现化脱耦，使得二者可以独立的变化，也就是说将他们之间的强关联变成弱关联，也就是指在一个软件系统的抽象化和实现化之间使用组合/聚合关系而不是继承关系，从而使两者可以独立的变化。
## 第二部分 代码实现
### 1.查看笔者已经做好的demo；
> 直接在控制器中实例化下对象即可；

```
new BridgePractice();
```
### 2.demo中具体的实现方式如下所示：
```
class BridgePractice{
    public function __construct(){
        echo "桥接模式：<br>";
        $abstractionA = new ConcreteAbstraction(new ConcreteImplementorA());
        $abstractionA->operation();

        $abstractionB = new ConcreteAbstraction(new ConcreteImplementorB());
        $abstractionB->operation();
    }
}
```
## 第三部分 原理介绍
### 1. 首先对抽象化进行一个提取，描述需要依赖实现化的方法的部分，但不关系细节；
```
// 抽象化角色，抽象化给出的定义，并保存一个依赖对象的引用。
abstract class Abstraction{
    protected $implementor;             //对实例化对象的引用；
    public function operation(){
        $this->implementor->operationImplement();
    }
}
```
### 2. 然后对抽象化角色进行具体的修正和扩展；
```
//  修正抽象化角色, 扩展抽象化角色，改变和修正父类对抽象化的定义。
class ConcreteAbstraction extends Abstraction{
    public function __construct(ImplementorGeneral $implementorGeneral){
        $this->implementor = $implementorGeneral;
    }
    public function operation(){
        $this->implementor->operationImplement();
    }
}
```
### 3. 实际化角色给出相应的接口，但不给具体实现方式；
```
// 实现化角色, 给出实现化角色的接口，但不给出具体的实现。
abstract class ImplementorGeneral{
    abstract public function operationImplement();
}
```
### 4. 实现类根据接口进行演化发展成一个个具体的实际类
```
// 具体化角色A
class ConcreteImplementorA extends ImplementorGeneral{
    public function operationImplement(){
        echo "my name is operationImplement of ConcreteImplementorA<br>";
    }
}

// 具体化角色B
class ConcreteImplementorB extends ImplementorGeneral{
    public function operationImplement(){
        echo "my name is operationImplement of ConcreteImplementorB<br>";
    }
}
```
