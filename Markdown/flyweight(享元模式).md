# php设计模块式——flyweight(享元模式)
## 第一部分 概念
FLYWEIGHT在拳击比赛中指最轻量级。

1. 享元模式以共享的方式高效的支持大量的细粒度对象。
2. 享元模式能做到共享的关键是区分内蕴状态和外蕴状态。内蕴状态存储在享元内部，不会随环境的改变而有所不同。外蕴状态是随环境的改变而改变的。外蕴状态不能影响内蕴状态，它们是相互独立的。
3. 将可以共享的状态和不可以共享的状态从常规类中区分开来，将不可以共享的状态从类里剔除出去。客户端不可以直接创建被共享的对象，而应当使用一个工厂对象负责创建被共享的对象。
4. 享元模式大幅度的降低内存中对象的数量。

## 第二部分 代码实现
### 1.查看笔者已经做好的demo；
> 直接在控制器中实例化下对象即可；

```
 new FlyweightPractice();
```
### 2.demo中具体的实现方式如下所示：
```
class FlyweightPractice{
    public function __construct(){
        // 共享对象
        echo "享元模式：(共享对象)<br>";
        $flyweight = new ShareFlyweight();
        echo "<br>获取单元a，并执行其方法<br>";
        $flyweight->getResource('a');
        $flyweight->operate();
        echo "<br>获取单元b，并执行其方法<br>";
        $flyweight->getResource('b');
        $flyweight->operate();
        echo "<br>获取单元c，并执行其方法<br>";
        $flyweight->getResource('c');
        $flyweight->operate();

        // 不共享的对象，单独调用
        echo "享元模式：(不共享对象)<br>";
        echo "<br>获取单元A，并执行其方法<br>";
        $uflyweight = new UnshareFlyweight('A');
        $uflyweight->operate();
        echo "<br>获取单元B，并执行其方法<br>";
        $uflyweight = new UnshareFlyweight('B');
        $uflyweight->operate();
    }
}
```
## 第三部分 原理介绍
### 1. 首先，创建享元基类，提供标准接口；
```
// 抽象的享元基类
abstract class Resources{
    public $resource = null;
    abstract public function operate();
}
```
### 2. 共享对象；
```
// 共享的单元对象
class ShareFlyweight extends Resources{
    private $resources = array();
    public function getResource($resourceStr){
        if (isset($this->resources[$resourceStr])) {
            return $this->resources[$resourceStr];
        } else {
            return $this->resources[$resourceStr] = $resourceStr;
        }
    }
    public function operate()    {
        foreach ($this->resources as $key => $resource) {
            echo $key . "=>" . $resource . "<br>";
        }
    }
}
```
### 3. 不共享对象；
```
// 不共享的单元对象
class UnshareFlyweight extends Resources{
    public function __construct($resource_str){
        $this->resource = $resource_str;
    }
    public function operate(){
        echo $this->resource . "<br>";
    }
}
```
