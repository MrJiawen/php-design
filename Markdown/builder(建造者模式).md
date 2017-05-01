# php设计模块式——builder(建造者模式)
## 第一部分 概念

1. 建造者模式将产品的内部属性和产品的生产过程进行分割；
2. 它让产品的内部属性可以独立演化，使得客户不必知道产品内部组成的细节；
3. 建造者模式实际上是一种分步进行建造的过程；
4. 通过导演者的生产操作，可以使一个建造过程生成具有不同的内部属性的产品对象。

## 第二部分 代码实现

### 1.查看笔者已经做好的demo；
> 直接在控制器中实例化下对象即可；

```
new BuilderPratice();
```
### 2.demo中具体的实现方式如下所示：
```
class BuilderPratice{
    public function __construct(){
        echo "使用建造者的模式<br>";
        echo "第一步，首先召集创建者<br>";
        $builder = new ConcreteBuilder();
        echo "第二步，导演者命令创建者开始构建产品<br>";
        $director = new Director($builder);
        echo "第三部，产品成型<br>";
        dump($builder->getProduct());
    }
}
```
## 第三部分 原理介绍

### 1. 首先，创建一个产品的载体，它类似一个容器，用来存储产品内部所具有的属性；
```
//产品： 它是商品的一个载体。
class Product{
    private $_parts;         //产品容器，存放商品的每个部件
    public function __construct(){
        $this->_parts = array();
    }
    // 添加商品的部件
    public function add($part){
        return array_push($this->_parts, $part);
    }
}
```
### 2. 然后，创建一个建造者，建造者可以构建不同的产品属性；
```
// 建造者的抽象类：用于规范一个产品应有的标准部件
abstract class AbstractBuilder{
    // 商品的第1个部件
    public abstract function buildPart1();
    // 商品的第2个部件
    public abstract function buildPart2();
    // 商品的第3个部件
    public abstract function buildPart3();
    // 得到产品
    public abstract function getProduct();
}

//建造者的具体类：实现一个具体的商品应有的部件
//备注：建造者相当于一个大容器，里面存放则商品的一个个部件。而决定其产品的最终结构，是由导演类进行组织的。
class ConcreteBuilder extends AbstractBuilder
{
    private $_product;
    public function __construct(){
        $this->_product = new Product();
    }

    // 商品的第1个部件
    public function buildPart1(){
        echo "添加商品的第1个部件<br>";
        return $this->_product->add('part_1');
    }
    // 商品的第2个部件
    public function buildPart2(){
        echo "添加商品的第2个部件<br>";
        return $this->_product->add('part_2');
    }
    // 商品的第3个部件
    public function buildPart3(){
        echo "添加商品的第3个部件<br>";
        return $this->_product->add('part_3');
    }
    // 得到产品
    public function getProduct(){
        return $this->_product;
    }
}
```
### 3.最后，导演者开始命令建造者按照步骤开始生产产品
```
// 导演者： 不同的导演可以进行演变不同的产品
class Director{
    // 导演者的职责：命令建造者开始构建产品
    public function __construct(AbstractBuilder $builder)    {
        $builder->buildPart1();
        $builder->buildPart2();
        $builder->buildPart3();
    }
}
```
