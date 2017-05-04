# php设计模块式——composite(合成模式)
## 第一部分 概念
合成模式将对象组织到树结构中，可以用来描述整体与部分的关系。

合成模式就是一个处理对象的树结构的模式。合成模式把部分与整体的关系用树结构表示出来。合成模式使得客户端把一个个单独的成分对象和由他们复合而成的合成对象同等看待。
## 第二部分 代码实现
### 1.查看笔者已经做好的demo；
> 直接在控制器中实例化下对象即可；

```
new CompositePractice();
```
### 2.demo中具体的实现方式如下所示：
```
class CompositePractice{
    public function __construct(){
        echo "合成模式：<br>首先为安全模式：<br>";

        $leaf1 = new SecurityLeaf('Leaf1');
        $leaf2 = new SecurityLeaf('Leaf2');

        $securityComposite = new SecurityComposite();
        $securityComposite->add($leaf1);
        $securityComposite->add($leaf2);
        $securityComposite->operation();

        $securityComposite->remove($leaf2);
        $securityComposite->operation();

        $leaf1->getComposite();
        $leaf2->getComposite();

        echo "<br><br>第二种为透明模式:<br>";

        $leaf1 = new TransparentLeaf('Leaf1');
        $leaf2 = new TransparentLeaf('Leaf2');

        $transparentComposite = new TransparentComposite();
        $transparentComposite->add($leaf1);
        $transparentComposite->add($leaf2);
        $transparentComposite->operation();

        $transparentComposite->remove($leaf1);
        $transparentComposite->operation();
    }
}
```
## 第三部分 原理介绍
> 合成模式分为两种，一种为安全式的合成模式，一种为透明式的合成模式；

### 1. （安全模式）首先，创建对子对象进行归纳出对应的接口；
```
// 安全式合成模式
interface SecurityComponent{
    public function getComposite(); //返回自己的实例
    public function operation();    // 示例方法
}
```
### 2. （安全模式）然后，创建一个子对象；
```
// 树叶部分(成员)
class SecurityLeaf implements SecurityComponent{
    private $_name;
    public function __construct($name){
        $this->_name = $name;
    }
    public function operation(){
        echo $this->_name . "这个叶子开始operation<br>";
    }
    public function getComposite(){
        echo $this->_name . "我是树叶，不是树干，不能获取树干（自己）<br>";
        return null;
    }
}
```
### 3. （安全模式）对子对象，在树状结构中进行整合；
```
// 树枝组件角色(安全模式下)
class SecurityComposite implements SecurityComponent{
    private $_composites;
    public function __construct(){
        $this->_composites = array();
    }
    public function getComposite(){
        return $this;
    }
    public function operation(){
        foreach ($this->_composites as $composite) {
            $composite->operation();
        }
    }
    // 聚集管理方法 添加一个子对象
    public function add(SecurityComponent $securityComponent){
        $this->_composites[] = $securityComponent;
    }
    // 聚集管理方法 删除一个子对象
    public function remove(SecurityComponent $securityComponent){
        foreach ($this->_composites as $key => $row) {
            if ($securityComponent == $row) {
                unset($this->_composites[$key]);
                return TRUE;
            }
        }
        return FALSE;
    }
    // 聚集管理方法 返回所有的子对象
    public function getChild(){
        return $this->_composites;
    }

}
```
### 4. （透明模式）首先，创建对子对象进行归纳出对应的接口；
```
// 透明式合成模式(抽象组件角色)
interface TransparentComponent{
    public function getComposite(); // 返回自己的实例
    public function operation(); // 示例方法
    public function add(TransparentComponent $transparentComponent); // 聚集管理方法,添加一个子对象
    public function remove(TransparentComponent $transparentComponent); // 聚集管理方法 删除一个子对象
    public function getChild(); // 聚集管理方法 返回所有的子对象
}
```
### 5. （透明模式）然后，创建一个子对象；
```
class TransparentLeaf implements TransparentComponent{
    private $_name;
    public function __construct($name){
        $this->_name = $name;
    }
    public function operation(){
        echo $this->_name . "这个叶子开始operation<br>";
    }
    public function getComposite()    {
        echo $this->_name . "我是树叶，不是树干，不能获取树干（自己）<br>";
        return null;
    }
    public function add(TransparentComponent $transparentComponent){
        echo $this->_name . "我是树叶，不是树干，不能添加子对象<br>";
        return false;
    }
    public function remove(TransparentComponent $transparentComponent){
        echo $this->_name . "我是树叶，不是树干，不能移除子对象<br>";
        return false;
    }
    public function getChild(){
        echo $this->_name . "我是树叶，不是树干，不能获取子对象<br>";
        return null;
    }
}
```
### 6. （透明模式）对子对象，在树状结构中进行整合；
```
// 树枝组件角色(透明模式下)
class TransparentComposite implements TransparentComponent{
    private $_composites;
    public function __construct(){
        $this->_composites = array();
    }
    public function getComposite(){
        return $this;
    }
    public function operation(){
        foreach ($this->_composites as $composite) {
            $composite->operation();
        }
    }
    // 聚集管理方法 添加一个子对象
    public function add(TransparentComponent $transparentComponent){
        $this->_composites[] = $transparentComponent;
    }
    // 聚集管理方法 删除一个子对象
    public function remove(TransparentComponent $transparentComponent){
        foreach ($this->_composites as $key => $row) {
            if ($transparentComponent == $row) {
                unset($this->_composites[$key]);
                return TRUE;
            }
        }
        return FALSE;
    }
    // 聚集管理方法 返回所有的子对象
    public function getChild(){
        return $this->_composites;
    }

}
```
