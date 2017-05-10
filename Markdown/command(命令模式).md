# php设计模块式——command(命令模式)
## 第一部分 概念
命令模式把一个请求或者操作封装到一个对象中。命令模式把发出命令的责任和执行命令的责任分割开，委派给不同的对象。

1. 命令模式允许请求的一方和发送的一方独立开来，使得请求的一方不必知道接收请求的一方的接口，更不必知道请求是怎么被接收，以及操作是否执行，何时被执行以及是怎么被执行的。系统支持命令的撤消。

## 第二部分 代码实现

### 1.查看笔者已经做好的demo；
> 直接在控制器中实例化下对象即可；

```
new CommandPractice();
```
### 2.demo中具体的实现方式如下所示：
```
class CommandPractice{
    public function __construct(){
        echo "命令模式：<br>";
        $receiver = new Receiver('hello world');
        $command = new ConcreteCommand($receiver);
        $invoker = new Invoker($command);
        $invoker->action();     //发布命令
    }
}

```
## 第三部分 原理介绍
### 1. 首先,建立命令标准接口规范；
```
//命令标准接口规范
interface Command{
    // 执行方法
    public function execute();
}
```
### 2. 再创建一个具体的命令角色
```
//具体的命令角色
class ConcreteCommand implements Command{
    private $_receiver;
    public function __construct(Receiver $receiver){
        $this->_receiver = $receiver;
    }
    public function execute(){
        $this->_receiver->action();
    }
}
```
### 3. 建立接受者角色，命令可以赋予于接受者角色
```
// 接收者角色
class Receiver{
    private $_name;
    public function __construct($name){
        $this->_name = $name;
    }
    public function action(){
        echo 'receive some cmd:' . $this->_name;
    }
}
```
### 4. 创建请求者，请求角色将有权发布命令
```
//请求者角色
class Invoker{
    private $_command;
    public function __construct(Command $command){
        $this->_command = $command;
    }
    public function action(){
        $this->_command->execute();
    }
}
```
