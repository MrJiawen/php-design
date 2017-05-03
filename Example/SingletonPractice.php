<?php

namespace CjwPhpDesign\example;

use CjwPhpDesign\Src\Singleton\MysqlSingleton;

class SingletonPractice
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
