# php设计模块式——strategy(策略模式)
## 第一部分 概念
策略模式针对一组算法，将每一个算法封装到具有共同接口的独立的类中，从而使得它们可以相互替换。

1. 策略模式使得算法可以在不影响到客户端的情况下发生变化，策略模式把行为和环境分开。
2. 环境类负责维持和查询行为类，各种算法在具体的策略类中提供。
3. 由于算法和环境独立开来，算法的增减，修改都不会影响到环境和客户端。

## 第二部分 代码实现
### 1.查看笔者已经做好的demo；
> 直接在控制器中实例化下对象即可；

```
new StrategyPractice();
```
### 2.demo中具体的实现方式如下所示：
```
class StrategyPractice{
    public function __construct(){
        echo "策略模式：<br><br>";
        $strategyA = new ConcreteStrategyA();
        $question = new Question($strategyA);
        $question->handle_question();

        $strategyB = new ConcreteStrategyB();
        $question = new Question($strategyB);
        $question->handle_question();

        $strategyC = new ConcreteStrategyC();
        $question = new Question($strategyC);
        $question->handle_question();
    }
}
```
## 第三部分 原理介绍
### 1. 首先创建出策略的标准接口；
```
// 抽象策略角色，以接口实现
interface Strategy{
    public function doMethod();     //算法接口
}
```
### 2. 实现每种具体的策略方案；
```
// 具体策略角色A
class ConcreteStrategyA implements Strategy{
    public function doMethod(){
        echo "执行策略方案A<br>";
    }
}
// 具体策略角色B
class ConcreteStrategyB implements Strategy{
    public function doMethod(){
        echo "执行策略方案B<br>";
    }
}
// 具体策略角色C
class ConcreteStrategyC implements Strategy{
    public function doMethod(){
        echo "执行策略方案C<br>";
    }
}
```
### 3. 描述实际运用环境；
```
// 环境角色
class Question{
    private $_strategy;
    public function __construct(Strategy $strategy){
        $this->_strategy = $strategy;
    }
    public function handle_question(){
        $this->_strategy->doMethod();
    }
}
```
