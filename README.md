# php-23-design
 php的23种设计模式

## 下载命令
```
composer require mr-jiawen/php-design:dev-master
```
## 第一部分 23种设计模式分类
> 设计模式分为：创建型模式， 结构型模式，行为型模式等23种设计模式。

注意:
1. 对象层面：处理对象之间的关系，决定于运行期。
2. 类层面：处理类的关系，决定于在编译期。

### 1.1 创建型
>`创建型设计模式`用于处理对象的实例化, 其构建对象以便能从实现系统解耦。

1. [工厂方法模式factory_method](./Markdown/factory_method（工厂方式模式）.md)
2. [抽象工厂模式abstract_factory](./Markdown/abstract_factory(抽象工厂模式).md)
3. [单例模式singleton](./Markdown/singleton(单例模式).md)
4. [建造者模式builder](./Markdown/builder(建造者模式).md)
5. [原型模式prototype](./Markdown/prototype(原型模式).md)

### 1.2 结构型
> `结构型设计模式`用于处理类和对象的组合,让不同的对象组成大规模的对象结构。

1. [适配器模式adapter](./Markdown/adapter(适配器模式).md)
2. [装饰器模式decorator](./Markdown/decorator(装饰器模式).md)
3. [代理模式proxy](./Markdown/proxy(代理模式).md)
4. [门面模式facade](./Markdown/facade(门面模式).md)
5. [桥接模式bridge](./Markdown/bridge(桥接模式).md)
6. [合成模式composite(组合模式)](./Markdown/composite(合成模式).md)
7. [享元模式flyweight](./Markdown/flyweight(享元模式).md)

### 1.3行为型
> `行为型设计模式`用于处理类的对象间通信，在对象中管理算法，关系，和责任。

1. 策略模式strategy
2. 模板方法模式template_method
3. 观察者模式observer
4. 迭代器模式decorator
5. 责任链模式responsibility_chain
6. 命令模式command
7. 备忘录模式memento
8. 状态模式state
9. 访问者模式visitor
10. 中介者模式mediator
11. 解释器模式interpreter

## 第二部分 设计的六大原则
> **开闭原则、里氏代换原则、依赖倒转原则、接口隔离原则、迪米特法则（最少知道原则）、合成复用原则**

1. 开闭原则（Open Close Principle）
	* 开闭原则就是说对扩展开放，对修改关闭。当程序需要进行扩展时，是不能去修改原来的代码的，实现一个热插拔的效果。
	* 其效果是：提供程序的扩展性，维护性。
2. 里氏代换原则（Liskov Substitution Principle）
	* 所有的基类出现的地方，一定可以用其子类替用。
	* `而里氏代换原则` 是对`开闭原则`的一个补充：`开放原则`是规范基类与子类的继承关系，而`里氏代换原则`是规范对实现抽象化的具体步骤。
3. 依赖倒转原则（Dependence Inversion Principle）
	* 它是`开闭原则`的基础
	* 具体内容：真对接口编程，依赖于抽象而不依赖于具体。
	* laravel中也运用这个特性。
4. 接口隔离原则（Interface Segregation Principle）
	* 让接口进行隔离，并且注意使用多个隔离的接口，比使用单个接口要好。
	* 其作用是进行解耦合。
5. 迪米特法则（最少知道原则）（Demeter Principle）
	*  让一个实体尽量少的与另外一个实体进行关联，以保证其模块的相对对立。
6. 合成复用原则（Composite Reuse Principle）
   * 尽量使用合成/聚合的方式，而不是使用继承。
   
   
----
参考文章为：
1. [github](https://github.com/yunkaiyueming/php_design_patterns),[web文字](http://www.cnblogs.com/yuqiandoudou/p/4646435.html
)
