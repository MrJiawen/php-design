# php设计模块式——templateMethod(模板方法模式)
## 第一部分 概念
模板方法模式准备一个抽象类，将部分逻辑以具体方法以及具体构造子类的形式实现，然后声明一些抽象方法来迫使子类实现剩余的逻辑。

1. 不同的子类可以以不同的方式实现这些抽象方法，从而对剩余的逻辑有不同的实现。
2. 先制定一个顶级逻辑框架，而将逻辑的细节留给具体的子类去实现。

## 第二部分 代码实现
### 1.查看笔者已经做好的demo；
> 直接在控制器中实例化下对象即可；

```
new TemplateMethodPractice();
```
### 2.demo中具体的实现方式如下所示：
```
class TemplateMethodPractice{
    public function __construct(){
        echo "模板方法模式:<br>";
        $class = new ConcreteClass();
        $class->templateMethod();
    }
}
```
## 第三部分 原理介绍
### 1. 首先创建抽象模板角色，定制一个顶级逻辑框架；
```
// 抽象模板角色
abstract class AbstractClass{
    // 模板方法 调用基本方法组装顶层逻辑
    public function templateMethod(){
        $this->primitiveOperation1();
        $this->primitiveOperation2();
    }
    // 基本方法
    abstract protected function primitiveOperation1();
    abstract protected function primitiveOperation2();
}
```
### 2. 然后创建具体的子类模板
```
// 具体模板角色
class ConcreteClass extends AbstractClass{
    protected function primitiveOperation1(){
        echo "原始操作方法1 <br>";
    }
    protected function primitiveOperation2(){
        echo "原始操作方法2 <br>";
    }
}
```
