# php设计模块式——iteration(迭代器模式)
## 第一部分 概念
迭代子模式可以顺序访问一个聚集中的元素而不必暴露聚集的内部表象。

1. 多个对象聚在一起形成的总体称之为聚集，聚集对象是能够包容一组对象的容器对象。
2. 迭代子模式将迭代逻辑封装到一个独立的子对象中，从而与聚集本身隔开。迭代子模式简化了聚集的界面。
3. 每一个聚集对象都可以有一个或一个以上的迭代子对象，每一个迭代子的迭代状态可以是彼此独立的。迭代算法可以独立于聚集角色变化

## 第二部分 代码实现

### 1.查看笔者已经做好的demo；
> 直接在控制器中实例化下对象即可；

```
new IterationPractice();
```
### 2.demo中具体的实现方式如下所示：
```
class IterationPractice{
    public function __construct(){
        echo "迭代器模式：<br><br>";

        $array = ['a' => 'a1', 'b' => 'b2', 'c' => 'c3'];
        $iterator = new ConcreteIterator($array);

        echo "第一行,index:" . $iterator->key() . ",value:" . $iterator->current() . "<br>";
        $iterator->next();
        echo "第二行,index:" . $iterator->key() . ",value:" . $iterator->current() . "<br>";
        $iterator->next();
        echo "第三行,index:" . $iterator->key() . ",value:" . $iterator->current() . "<br>";
        $iterator->next();
        echo "第四行,index:" . $iterator->key() . ",value:" . $iterator->current() . "<br>";
        dd($iterator->valid());
    }
}
```
## 第三部分 原理介绍
### 1. 首先,规范迭代器的标准接口；
```
// 迭代器的标准接口
interface Iterator{
    public function rewind();
    public function key();
    public function current();
    public function next();
    public function valid();
}
```
### 2. 实现一个具体的迭代器；
```
// 一个具体的迭代器
class ConcreteIterator implements Iterator{
    private $_data;
    public function __construct($data){
        $this->_data = $data;
    }
    public function rewind(){
        return reset($this->_data);
    }
    public function key(){
        return key($this->_data);
    }
    public function current(){
        return current($this->_data);
    }
    public function next(){
        return next($this->_data);
    }
    public function valid(){
        return ($this->current() !== false);
    }
}
```
