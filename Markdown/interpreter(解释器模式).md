# php设计模块式——interpreter(解释器模式)
## 第一部分 概念
给定一个语言后，解释器模式可以定义出其文法的一种表示，并同时提供一个解释器。

1. 客户端可以使用这个解释器来解释这个语言中的句子。解释器模式将描述怎样在有了一个简单的文法后，使用模式设计解释这些语句。
2. 在解释器模式里面提到的语言是指任何解释器对象能够解释的任何组合。
3. 在解释器模式中需要定义一个代表文法的命令类的等级结构，也就是一系列的组合规则。
4. 每一个命令对象都有一个解释方法，代表对命令对象的解释。
5. 命令对象的等级结构中的对象的任何排列组合都是一个语言。

## 第二部分 代码实现

### 1.查看笔者已经做好的demo；
> 直接在控制器中实例化下对象即可；

```
new InterpreterPractice();
```
### 2.demo中具体的实现方式如下所示：
```
class InterpreterPractice{
    public function __construct(){
        echo "解释器模式:<br>";
        $obj = new Interpreter();
        $obj->execute('123qwe456zxc');
    }
}
```
## 第三部分 原理介绍
### 1. 首先，创建一个抽象的表达者角色；
```
// 抽象表达角色
abstract class Expression{
    public function interpreter($str){
        return $str;
    }
}
```
### 2. 然后，创建各种具体的表达者角色；
```
// 具体的表达角色
class ExpressionCharater extends Expression{
    function interpreter($str){
        return strtoupper($str);
    }
}
// 具体的表达角色
class ExpressionNum extends Expression{
    function interpreter($str){
        switch ($str) {
            case "0":return "零";
            case "1":return "一";
            case "2":return "二";
            case "3":return "三";
            case "4":return "四";
            case "5":return "五";
            case "6":return "六";
            case "7":return "七";
            case "8":return "八";
            case "9":return "九";
        }
    }
}
```
### 3. 最后，创建解释器；
```
// 解释器
class Interpreter{
    public function execute($string) {
        $expression = null;
        for ($i = 0; $i < strlen($string); $i++) {
            $temp = $string[$i];
            switch (true) {
                case is_numeric($temp):
                    $expression = new ExpressionNum();
                    break;
                default:
                    $expression = new ExpressionCharater();
            }
            echo $expression->interpreter($temp);
            echo "<br>";
        }
    }
}
```
