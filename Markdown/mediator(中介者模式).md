# php设计模块式——mediator(中介者模式)
## 第一部分 概念
中介者模式包装了一系列对象相互作用的方式，使得这些对象不必相互明显作用。

1. 中介者使得他们可以松散偶合。当某些对象之间的作用发生改变时，不会立即影响其他的一些对象之间的作用。保证这些作用可以彼此独立的变化。
2. 中介者模式将多对多的相互作用转化为一对多的相互作用。中介者模式将对象的行为和协作抽象化，把对象在小尺度的行为上与其他对象的相互作用分开处理。

## 第二部分 代码实现

### 1.查看笔者已经做好的demo；
> 直接在控制器中实例化下对象即可；

```
new MediatorPractice();
```
### 2.demo中具体的实现方式如下所示：
```
class MediatorPractice{
    public function __construct(){
        echo "中介者模式:<br><br>";
        $objMediator = new ConcreteMediator();
        $objC1 = new Colleague1($objMediator);
        $objC2 = new Colleague2($objMediator);
        $objMediator->set($objC1,$objC2);
        $objC1->send("to c2 from c1");
        $objC2->send("to c1 from c2");
    }
}
```
## 第三部分 原理介绍
### 1. 首先,创建一个中介者角色的标准接口；
```
// 中介者角色
abstract class Mediator{
    abstract public function send($message, $colleague);
}
```
### 2. 然后创建一个抽象的基本对象角色；
```
// 抽象对象
abstract class Colleague{
    private $_mediator = null;
    public function __construct(Mediator $mediator){
        $this->_mediator = $mediator;
    }
    public function send($message){
        $this->_mediator->send($message, $this);
    }
    abstract public function notify($message);
}
```
### 3. 然后创建一个具体的中介者；
```
// 具体中介者角色
class ConcreteMediator extends Mediator{
    private $_colleague1 = null;
    private $_colleague2 = null;
    public function send($message, $colleague){
        //echo $colleague->notify($message);
        if ($colleague == $this->_colleague1) {
            $this->_colleague1->notify($message);
        } else {
            $this->_colleague2->notify($message);
        }
    }
    public function set(Colleague $colleague1, Colleague $colleague2){
        $this->_colleague1 = $colleague1;
        $this->_colleague2 = $colleague2;
    }
}
```
### 4. 最后创建具体的对象角色；
```
// 具体对象角色
class Colleague1 extends Colleague{
    public function notify($message){
        echo 'colleague1：' . $message . "<br>";
    }
}
// 具体对象角色
class Colleague2 extends Colleague{
    public function notify($message){
        echo 'colleague2：' . $message . "<br>";
    }
}
```
