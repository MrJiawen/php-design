# php设计模块式——factory_method(工厂方式模式)
## 第一部分 概念
工厂模式：让客户类和工厂类进行完全分离。其好处如下：
1. 消费者在使用某个商品的时候，无需再去关心其制造工艺和流程。
2. 而工厂对产品进行系统升级时，也不会影响消费者对产品的正常使用。

## 第二部分 代码实现

### 1.查看笔者已经做好的demo；
> 直接在控制器中实例化下对象即可；

```
new FactoryMethodPratice()
```
### 2.demo中具体的使用方式如下所示：
```
class FactoryMethodPratice
{
    public function __construct()
    {
        $factory = new MyWheelFactory();

        echo "首先,生产出大轮子<br>";
        $bigWheel = $factory->createWheel('big');
        $bigWheel->wheelSize();
        $bigWheel->wheelPrice();

        echo "<br><br>然后，生产出小轮子<br>";
        $smallWheel = $factory->createWheel('small');
        $smallWheel->wheelSize();
        $smallWheel->wheelPrice();

        echo "<br><br>接着，生产出其他类型的轮子，如果没有，则会报错<br>";
        $otherWheel = $factory->createWheel('other');
        $otherWheel->wheelSize();
        $otherWheel->wheelPrice();
    }
}
```

## 第三部分 原理介绍

### 1. 首先，创建一类产品，然后创建其具体的实例产品；
```
//创建轮子这类产品
Abstract class WheelGenerator
{
    // 轮子的大小
    public function wheelSize(){}

    // 轮子的价格
    public function wheelPrice(){}
}

// 大轮子商品
class BigWheel extends WheelGenerator{
    public function wheelSize(){
        echo " i'm big wheel<br>";
    }
    public function wheelPrice(){
        echo "big wheel is very expensive<br>";
    }
}

// 小轮子商品
class SmallWheel extends WheelGenerator{
    public function wheelSize(){
        echo " i'm small wheel<br>";
    }
    public function wheelPrice(){
        echo "small wheel is very cheap<br>";
    }
}
```
### 2. 制定生产轮子的工厂标准规范
```
// 创建轮子工厂的标准接口
interface AbstractWheelFactory{
    public function createWheel($type);
}

```
### 3. 最后，制定一个具体的轮子工厂
```
//按照标准的轮子工厂接口，进行创建一个具体的工厂
class MyWheelFactory implements AbstractWheelFactory{
    public function createWheel($type){
        switch ($type) {
            case 'big': return new BigWheel();
            case 'small': return new SmallWheel();
            default: exit("error");
        }
    }
}
```
