# php设计模块式——state(状态模式)
## 第一部分 概念
状态模式允许一个对象在其内部状态改变的时候改变行为。

1. 状态模式把所研究的对象的行为包装在不同的状态对象里，每一个状态对象都属于一个抽象状态类的一个子类。
2. 状态模式的意图是让一个对象在其内部状态改变的时候，其行为也随之改变。
3. 状态模式需要对每一个系统可能取得的状态创立一个状态类的子类。当系统的状态变化时，系统便改变所选的子类。

## 第二部分 代码实现
### 1.查看笔者已经做好的demo；
> 直接在控制器中实例化下对象即可；

```
new StatePractice();
```
### 2.demo中具体的实现方式如下所示：
```
class StatePractice{
    public function __construct(){
        echo "状态模式：<br><br>";
        $context = new Context();
        $context->request();
        $context->request();
        $context->request();
        $context->request();
    }
}
```
## 第三部分 原理介绍
### 1. 首先创建出标准的状态接口规范；
```
// 抽象状态角色
interface State{
    //方法示例
    public function handle(Context $context);
}
```
### 2. 创建具体的状态角色；
```
//具体状态角色A*/
class ConcreteStateA implements State{
    private static $_instance = null;
    private function __construct(){}
    public static function getInstance(){
        if (is_null(self::$_instance)) {
            self::$_instance = new ConcreteStateA();
        }
        return self::$_instance;
    }
    public function handle(Context $context){
        echo 'concrete_a' . "<br>";
        $context->setState(ConcreteStateB::getInstance());
    }
}
//具体状态角色B
class ConcreteStateB implements State{
    private static $_instance = null;
    private function __construct(){}
    public static function getInstance(){
        if (is_null(self::$_instance)) {
            self::$_instance = new ConcreteStateB();
        }
        return self::$_instance;
    }
    public function handle(Context $context){
        echo 'concrete_b' . "<br>";
        $context->setState(ConcreteStateA::getInstance());
    }
}
```
### 3. 然后创建环境角色；
```
// 环境角色
class Context{
    private $_state;
    public function __construct(){
        // 默认为stateA
        $this->_state = ConcreteStateA::getInstance();
    }
    public function setState(State $state){
        $this->_state = $state;
    }
    public function request(){
        $this->_state->handle($this);
    }
}
```
