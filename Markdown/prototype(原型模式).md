# php设计模块式——prototype(原型模式)
## 第一部分 概念
原始模型模式：通过给出一个原型对象来指明所要创建的对象的类型，然后用复制这个原型对象的方法创建出更多同类型的对象。
1. 原始模型模式允许动态的增加或减少产品类；
2. 产品类不需要非得有任何事先确定的等级结构，原始模型模式适用于任何的等级结构。
3. 缺点是每一个类都必须配备一个克隆方法。

## 第二部分 代码实现

### 1.查看笔者已经做好的demo；
> 直接在控制器中实例化下对象即可；

```
 new PrototypePractice();
```
### 2.demo中具体的实现方式如下所示：
```
class PrototypePractice{
    public function __construct(){
        //创建原型
        $obj1 = new ConcretePrototype('my name is prototype;');
        //复制原型
        $obj2 = $obj1->copy();
        dd($obj1,$obj2);
    }
}
```
## 第三部分 原理介绍
### 1. 首先，创建创建原型接口`copy()`方法；
```
// 原型接口
interface Prototype{
    public function copy();
}
```
### 2.然后，实现原型类
```
// 具体原型类
class ConcretePrototype implements Prototype{
    private $_name;
    // 初始化原型
    public function __construct($name){
        $this->_name = $name;
    }
    // 复制原型（复制自己）
    public function copy(){
        return clone $this;
    }
}
```
