# php设计模块式——visitor(访问者模式)
## 第一部分 概念
访问者模式的目的是封装一些施加于某种数据结构元素之上的操作。

1. 一旦这些操作需要修改的话，接受这个操作的数据结构可以保持不变。访
2. 问者模式适用于数据结构相对未定的系统，它把数据结构和作用于结构上的操作之间的耦合解脱开，使得操作集合可以相对自由的演化。
3. 访问者模式使得增加新的操作变的很容易，就是增加一个新的访问者类。
4. 访问者模式将有关的行为集中到一个访问者对象中，而不是分散到一个个的节点类中。
5. 当使用访问者模式时，要将尽可能多的对象浏览逻辑放在访问者类中，而不是放到它的子类中。
6. 访问者模式可以跨过几个类的等级结构访问属于不同的等级结构的成员类。


## 第二部分 代码实现
### 1.查看笔者已经做好的demo；
> 直接在控制器中实例化下对象即可；

```
new VisitorPractice();
```
### 2.demo中具体的实现方式如下所示：
```
class VisitorPractice{
    public function __construct(){
        echo "访问者方法模式:<br>";
        $elementA = new ConcreteElementA("ElementA");
        $elementB = new ConcreteElementB("ElementB");
        $elementA2 = new ConcreteElementB("ElementA2");
        $visitor1 = new ConcreteVisitor1();
        $visitor2 = new ConcreteVisitor2();
        $os = new ObjectStructure();
        $os->attach($elementA);
        $os->attach($elementB);
        $os->attach($elementA2);
        $os->detach($elementA2);
        $os->accept($visitor1);
        $os->accept($visitor2);
    }
}
```
## 第三部分 原理介绍
### 1. 首先创建，访问者的标准接口；
```
// 抽象访问者角色
interface Visitor{
    public function visitConcreteElementA(ConcreteElementA $elementA);
    public function visitConcreteElementB(concreteElementB $elementB);
}
```
### 2. 然后创建，节点元素角色的标准接口；
```
//抽象节点角色
interface Element{
    public function accept(Visitor $visitor);
}
```
### 3. 接着创建具体的访问者；
```
//具体的访问者1
class ConcreteVisitor1 implements Visitor{
    public function visitConcreteElementA(ConcreteElementA $elementA){
        echo $elementA->getName().'<br>';
    }
    public function visitConcreteElementB(ConcreteElementB $elementB){
        echo $elementB->getName().'<br>';
    }
}
// 具体的访问者2
class ConcreteVisitor2 implements Visitor{
    public function visitConcreteElementA(ConcreteElementA $elementA){
        echo $elementA->getName().'<br>';
    }
    public function visitConcreteElementB(ConcreteElementB $elementB){
        echo $elementB->getName().'<br>';
    }
}
```
### 4. 创建具体的节点元素角色；
```
// 具体元素A
class ConcreteElementA implements Element{
    private $_name;
    public function __construct($name){
        $this->_name = $name;
    }
    public function getName(){
        return $this->_name;
    }
    //接受访问者调用它针对该元素的新方法
    public function accept(Visitor $visitor){
        $visitor->visitConcreteElementA($this);
    }
}
// 具体元素B
class ConcreteElementB implements Element{
    private $_name;
    public function __construct($name){
        $this->_name = $name;
    }
    public function getName(){
        return $this->_name;
    }
    //接受访问者调用它针对该元素的新方法
    public function accept(Visitor $visitor){
        $visitor->visitConcreteElementB($this);
    }
}
```
### 5. 最后，建立对象结构 即元素集合；
```
// 对象结构 即元素的集合
class ObjectStructure{
    private $_collection;
    public function __construct(){
        $this->_collection = array();
    }
    public function attach(Element $element){
        return array_push($this->_collection, $element);
    }
    public function detach(Element $element){
        $index = array_search($element, $this->_collection);
        if ($index !== FALSE) {
            unset($this->_collection[$index]);
        }
        return $index;
    }
    public function accept(Visitor $visitor){
        foreach ($this->_collection as $element) {
            $element->accept($visitor);
        }
    }
}
```
