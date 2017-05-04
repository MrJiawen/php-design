# php设计模块式——facade(门面模式)
## 第一部分 概念
外部与一个子系统的通信必须通过一个**统一的门面对象**进行。
1. 门面模式提供一个高层次的接口，使得子系统更易于使用。
2. 每一个子系统只有一个门面类，而且此门面类只有一个实例，也就是说它是一个单例模式。
3. 整个系统可以有多个门面类。
4. 思考laravel中的门面模式是如何进行的；

## 第二部分 代码实现
### 1.查看笔者已经做好的demo；
> 直接在控制器中实例化下对象即可；

```
new FacadePractice();
```
### 2.demo中具体的实现方式如下所示：
```
class FacadePractice{
    public function __construct(){
        echo "门面模式:<br><br>";
        $securityFacade = new SecurityFacade();
        echo "执行所有操作：<br>";
        $securityFacade->activate();
        echo "<br>关闭所有操作，启动安全模式:<br>";
        $securityFacade->deactivate();
    }
}
```
## 第三部分 原理介绍
```
// 相机类
class Camera{
    public function turnOn(){
        echo "打开照相机<br>";
    }
    public function turnOff(){
        echo "关闭照相机<br>";
    }
    public function rotate(){
        echo "切换照相机状态<br>";
    }
}

// 灯类
class Light{
    public function turnOn(){
        echo "打开电灯<br>";
    }
    public function turnOff(){
        echo "关闭电灯<br>";
    }
    public function changeBulb(){
        echo "电灯的状态切换<br>";
    }
}

// 元器件类
class Sensor{
    public function activate(){
        echo "使用电气器件<br>";
    }
    public function deactivate(){
        echo "不使用电气器件<br>";
    }
    public function trigger(){
        echo "电气器件的状态切换<br>";
    }
}

```
### 1. 首先，创建一系列的子对象；
### 2. 然后，创建一个`securityFacade`这个门面进行统一管理（他是一个高层次的接口）;
```
// 安全门面类
class SecurityFacade{
    private $_camera1,$_camera2;
    private $_light1,$_light2,$_light3;
    private $_sensor;
    public function __construct() {
        $this->_camera1 = new Camera();
        $this->_camera2 = new Camera();
        $this->_light1 = new Light();
        $this->_light2 = new Light();
        $this->_light3 = new Light();
        $this->_sensor = new Sensor();
    }
    public function activate() {
        $this->_camera1->turnOn();
        $this->_camera2->turnOn();
        $this->_light1->turnOn();
        $this->_light2->turnOn();
        $this->_light3->turnOn();
        $this->_sensor->activate();
    }
    public  function deactivate() {
        $this->_camera1->turnOff();
        $this->_camera2->turnOff();
        $this->_light1->turnOff();
        $this->_light2->turnOff();
        $this->_light3->turnOff();
        $this->_sensor->deactivate();
    }
}
```
