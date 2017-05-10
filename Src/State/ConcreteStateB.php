<?php

namespace CjwPhpDesign\Src\State;

/**具体状态角色B
 * Class ConcreteStateB
 * @package CjwPhpDesign\Src\State
 */
class ConcreteStateB implements State
{
    private static $_instance = null;

    private function __construct()
    {
    }

    public static function getInstance()
    {
        if (is_null(self::$_instance)) {
            self::$_instance = new ConcreteStateB();
        }
        return self::$_instance;
    }

    public function handle(Context $context)
    {
        echo 'concrete_b' . "<br>";
        $context->setState(ConcreteStateA::getInstance());
    }
}
