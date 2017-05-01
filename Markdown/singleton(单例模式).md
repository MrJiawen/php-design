# php设计模块式——singleton(单例模式)
## 第一部分 概念
1. 单例模式就是某一个类只能有一个实例；
2. 而且此实例是面向于整个系统脚本的，单例模式只适合在真正需要“单一实例”的时候才可以使用。

## 第二部分 代码实现

### 1.查看笔者已经做好的demo；
> 直接在控制器中实例化下对象即可；

```
new SingletonPratice();
```
### 2.demo中具体的实现方式如下所示：
```
class SingletonPratice
{
    public function __construct()
    {
        //只能使用静态方法得到对象，不能使用new 和clone
        $mysql1 = MysqlSingleton::getInstance();
        dump($mysql1);

        $mysql2 = MysqlSingleton::getInstance();
        dump($mysql2);

        $mysql3 = clone($mysql1);
    }
}
```
## 第三部分 原理介绍
> 实例只能通过静态方法来创建，不能使用new 和clone

```
class MysqlSingleton{
    //该属性用来保存实例对象
    private static $that;
    public $dec;

    //（构造函数为private,防止创建对象）
    private function __construct(){
        $this->dec = "成功创建了mysql实例对象";
        dump('并连接到了数据库');
    }

    // 得到一个单例实例
    public static function getInstance(){
        if (!(self::$that instanceof self)) {
            self::$that = new self();
        }
        return self::$that;
    }

    // 防止对象被复制
    public function __clone(){
        trigger_error('Clone is not allowed !');
    }
}
```
