# php设计模块式——adapter(适配器模式)
## 第一部分 概念
适配器模式:把原本因接口原因不匹配而无法一起工作的两个类整合到一个类中，从而正常工作。
1. 适配器类可以随意整合多个不同的类成为一个合适的实例给客户端。

## 第二部分 代码实现
### 1.查看笔者已经做好的demo；
> 直接在控制器中实例化下对象即可；

```
 new AdapterPractice();
```
### 2.demo中具体的实现方式如下所示：
```
class AdapterPractice{
    public function __construct(){
        echo "适配器模式分为两种：第一种为对象适配器；第二种为类适配器；<br>";
        echo "首先，进行对象适配器:<br>";
        $parts = new Parts();
        $objAdapter = new ObjectAdapter($parts);
        $objAdapter->method1();
        $objAdapter->method2();
        echo "<br>然后，进行类适配器:<br>";
        $classAdapter = new ClassAdapter();
        $classAdapter->method1();
        $classAdapter->method2();
    }
}
```
## 第三部分 原理介绍
> 适配器分为两种，一种是对象适配器（更加灵活），一种是类适配器（更加方便）

### 1. 首先，建立一个适配的接口标准；
```
// 需要适配的接口标准
interface Target{
    public function method1();
    public function method2();
}
```
### 2. 然后，需要进行适配的原类或对象；
```
// 适配器成员——需要适配的必要部分
class Parts{
    public function method1(){
        echo "i'm is method1<br>";
    }
}
```
### 3. 实现对象适配器；
```
// 对象适配器
class ObjectAdapter implements Target
{
    private $_part1;
    public function __construct(Parts $part)    {
        $this->_part1 = $part;
    }
    // 适配成员
    public function method1(){
        $this->_part1->method1();
    }
    public function method2(){

        echo "对象适配器适配后，新添的method2<br>";
    }
}
```
### 4. 实现类适配器；
```
/** 类适配器
 *  备注：通过继承的方法完成适配功能
 */
class ClassAdapter extends Parts implements Target{
    public function method2(){
        echo "类适配器适配后，新添的method2<br>";
    }
}
```
