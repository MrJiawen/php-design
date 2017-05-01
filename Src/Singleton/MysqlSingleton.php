<?php

namespace CjwPhpDesign\Src\Singleton;

/** 创建一个mysql单例实例
 *
 * Class MysqlSingleton
 * @package CjwPhpDesign\Src\Singleton
 */
class MysqlSingleton
{
    //该属性用来保存实例对象
    private static $that;
    public $dec;

    /**（构造函数为private,防止创建对象）
     *
     * MysqlSingleton constructor.
     */
    private function __construct()
    {
        $this->dec = "成功创建了mysql实例对象";
        dump('并连接到了数据库');
    }

    /** 得到一个单例实例
     * @return MysqlSingleton
     */
    public static function getInstance()
    {
        if (!(self::$that instanceof self)) {
            self::$that = new self();
        }
        return self::$that;
    }

    /**
     * 防止对象被复制
     */
    public function __clone()
    {
        trigger_error('Clone is not allowed !');
    }
}