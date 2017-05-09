# php设计模块式——observer(观察者模式)
## 第一部分 概念
观察者模式定义了一种一队多的依赖关系，让多个观察者对象同时监听某一个主题对象。

1. 这个主题对象在状态上发生变化时，会通知所有观察者对象，使他们能够自动更新自己。

## 第二部分 代码实现

### 1.查看笔者已经做好的demo；
> 直接在控制器中实例化下对象即可；

```
new ObserverPractice();
```
### 2.demo中具体的实现方式如下所示：
```
class ObserverPractice{
    public function __construct(){
        echo "观察者模式：<br><br>";

        $subjectStudent = new SubjectStudent();

        $subjectStudent->addObserver(new ObserverStudentA());
        $subjectStudent->addObserver(new ObserverStudentB());
        $subjectStudent->addObserver(new ObserverStudentC());
        $subjectStudent->sendMsg("学生集合");

        echo "<br>移除学生观察者B，如下所示:<br>";
        $subjectStudent->removeObserver('studentB');
        $subjectStudent->sendMsg("学生再次集合");
    }
}
```
## 第三部分 原理介绍
### 1. 首先,规范观察者的标准接口；
```
// 观察者的标准接口
interface Observer{
    // 观察者监听方法
    public function onSendMsg(Subject $Subject, $args);
    // 观察者名称
    public function getName();
}
```
### 2. 然后，创建具体的观察者；
```
// 具体的观察者studentA
class ObserverStudentA implements Observer{
    public function onSendMsg(Subject $Subject, $args){
        echo $args . " send message to studentA <br>";
    }
    public function getName(){
        return "studentA";
    }
}
// 具体的观察者studentB
class ObserverStudentB implements Observer{
    public function onSendMsg(Subject $Subject, $args){
        echo $args . " send message to studentB <br>";
    }
    public function getName(){
        return "studentB";
    }
}
// 具体的观察者studentC
class ObserverStudentC implements Observer{
    public function onSendMsg(Subject $Subject, $args){
        echo $args . " send message to studentC <br>";
    }
    public function getName(){
        return "studentC";
    }
}
```
### 3. 再创建主题的标准；
```
// 观察者的主题接口标准
interface Subject{
    public function addObserver(Observer $observer);
    public function sendMsg($message);
}
```
### 4. 最后，创建一个实际的主题；
```
// 具体观察者主题——学生
class SubjectStudent implements Subject{
    private $_observers = array();
    public function addObserver(Observer $observer){
        $this->_observers[] = $observer;
    }
    public function sendMsg($message){
        foreach ($this->_observers as $observer) {
            $observer->OnSendMsg($this, $message);
        }
    }
    public function removeObserver($observerName){
        foreach ($this->_observers as $key => $observer) {
            if ($observer->getName() == $observerName) {
                array_splice($this->_observers, $key, 1);
                return true;
            }
        }
        return false;
    }
}
```
