# php设计模块式——memento(备忘录模式)
## 第一部分 概念
备忘录对象是一个用来存储另外一个对象内部状态的快照的对象。

1. 备忘录模式的用意是在不破坏封装的条件下，将一个对象的状态捉住，并外部化，存储起来，从而可以在将来合适的时候把这个对象还原到存储起来的状态。

## 第二部分 代码实现

### 1.查看笔者已经做好的demo；
> 直接在控制器中实例化下对象即可；

```
new MementoPractice();
```
### 2.demo中具体的实现方式如下所示：
```
class MementoPractice{
    public function __construct(){
        /* 创建目标对象 */
        $org = new Originator();
        $org->setState('open');
        $org->showState();
        /* 创建备忘 */
        $memento = $org->createMemento();
        /* 通过Caretaker保存此备忘 */
        $caretaker = new Caretaker();
        $caretaker->setMemento($memento);
        /* 改变目标对象的状态 */
        $org->setState('close');
        $org->showState();
        $org->restoreMemento($memento);
        $org->showState();
        /* 改变目标对象的状态 */
        $org->setState('close');
        $org->showState();
        /* 还原操作 */
        $org->restoreMemento($caretaker->getMemento());
        $org->showState();
    }
}
```
## 第三部分 原理介绍
### 1. 首先,创建一个原始对象(需要进行备忘目标)：
```
// 发起人(Originator)角色
class Originator{
    private $_state;
    public function __construct(){
        $this->_state = '';
    }
    // 创建备忘录
    public function createMemento(){
        return new Memento($this->_state);
    }
    //将发起人恢复到备忘录对象记录的状态上
    public function restoreMemento(Memento $memento){
        $this->_state = $memento->getState();
    }
    public function setState($state){
        $this->_state = $state;
    }
    public function getState(){
        return $this->_state;
    }
    public function showState(){
        echo $this->_state;
        echo "<br>";
    }
}
```
### 2. 然后，创建一个备忘录角色；
```
//备忘录(Memento)角色
class Memento{
    private $_state;
    public function __construct($state){
        $this->setState($state);
    }
    public function getState(){
        return $this->_state;
    }
    public function setState($state){
        $this->_state = $state;
    }
}
```
### 3. 最后，创建一个负责人角色；
```
//负责人(Caretaker)角色
class Caretaker{
    private $_memento;
    public function getMemento(){
        return $this->_memento;
    }
    public function setMemento(Memento $memento){
        $this->_memento = $memento;
    }
}

```
