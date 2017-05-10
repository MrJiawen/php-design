<?php
namespace CjwPhpDesign\Src\State;

/**具体状态角色A
 * Class ConcreteStateA
 * @package CjwPhpDesign\Src\State
 */
class ConcreteStateA implements State
{
    private static $_instance = null;

    private function __construct()
    {
    }

    /**静态工厂方法，返还此类的唯一实例
     * @return ConcreteStateA|null
     */
    public static function getInstance()
    {
        if (is_null(self::$_instance)) {
            self::$_instance = new ConcreteStateA();
        }
        return self::$_instance;
    }

    public function handle(Context $context)
    {
        echo 'concrete_a' . "<br>";
        $context->setState(ConcreteStateB::getInstance());
    }

}