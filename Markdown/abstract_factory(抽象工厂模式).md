# php设计模块式——abstract_factory(抽象工厂模式)
## 第一部分 概念

1. 与工厂方式模式相比，抽象工厂模式不再负责所有商品的生产创建，而是把其具体生产的工作交给子类去做；
2. 抽象工厂的核心主要是用来定义子工厂的具体生产规范，而其生产细节则有每个子工厂进行细化。

换一句话理解：
1. 工厂方式模式：同一个工厂可以生产出同一类型的很多商品；（商品的横向扩展）
2. 抽象工厂模式：核心工厂负责定义子工厂标准规范，而其对应的子工厂则负责生产一整套配套的商品出来；（商品的纵向扩展）

## 第二部分 代码实现
### 1.查看笔者已经做好的demo；
>直接在控制器中实例化下对象即可；

```
new AbstractFactoryPractice();
```
### 2.demo中具体的实现方式如下所示：
```
class AbstractFactoryPractice{
    public function __construct(){
        echo '第一类别：生产一套大型号的商品<br>';

        $bigFactory = new BigFactory();
        echo '1. 首先生产出大型号的轮子<br>';
        $bigWheel = $bigFactory->createWheel();
        $bigWheel->wheelSize();
        $bigWheel->wheelPrice();
        echo '2. 然后生产出大型号的螺丝<br>';
        $bigScrew = $bigFactory->createScrew();
        $bigScrew->screwSize();
        $bigScrew->screwPrice();

        echo '<br><br>第二类别：生产一套小型号的商品<br>';

        $smallFactory = new SmallFactory();
        echo '1. 首先生产出小型号的轮子<br>';
        $SmallWheel = $smallFactory->createWheel();
        $SmallWheel->wheelSize();
        $SmallWheel->wheelPrice();
        echo '2. 然后生产出小型号的螺丝<br>';
        $SmallScrew = $smallFactory->createScrew();
        $SmallScrew->screwSize();
        $SmallScrew->screwPrice();
    }
}
```
## 第三部分 原理介绍

### 1. 首先，创建多类产品，然后创建其具体的实例商品；
```
//创建轮子这类产品
Abstract class WheelGenerator{
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
```
//创建螺丝这类产品
Abstract class ScrewGenerator{
    // 螺丝的大小
    public function wheelSize(){}
    // 螺丝的价格
    public function wheelPrice(){}
}
// 大螺丝商品
class BigScrew extends ScrewGenerator{
    // 螺丝的大小
    public function screwSize(){
        echo " i'm big screw<br>";
    }
    // 螺丝的价格
    public function screwPrice(){
        echo "big screw is very expensive<br>";
    }
}
//小螺丝商品
class SmallScrew extends ScrewGenerator{
    // 螺丝的大小
    public function screwSize(){
        echo " i'm small screw<br>";
    }
    // 螺丝的价格
    public function screwPrice(){
        echo "small screw is very cheap<br>";
    }
}
```
### 2. 制定抽象工厂标准规范
```
// 建立一个抽象工厂的标准接口
interface AbstractFactory{
    // 生产一个轮子
    public function createWheel();
    // 生产一个螺丝
    public function createScrew();
}
```
###  3.最后，制定具体的子工厂进行生产成套配件
```
// 按照抽象工厂的标准接口规范，创建一个具体的工厂（大型尺寸）
class BigFactory implements AbstractFactory{
    // 生产一个大型号轮子
    public function createWheel(){
        return new BigWheel();
    }
    // 生产一个大型号螺丝
    public function createScrew(){
        return new BigScrew();
    }
}

// 按照抽象工厂的标准接口规范，创建一个具体的工厂（小型尺寸）
class SmallFactory implements AbstractFactory{
    // 生产一个小型号轮子
    public function createWheel(){
        return new SmallWheel();
    }
    // 生产一个小型号螺丝
    public function createScrew()    {
        return new SmallScrew();
    }
}
```
