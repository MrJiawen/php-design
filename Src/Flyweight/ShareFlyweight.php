<?php

namespace CjwPhpDesign\Src\Flyweight;

/** 共享的单元对象
 * Class ShareFlyweight
 * @package CjwPhpDesign\Src\Flyweight
 */
class ShareFlyweight extends Resources
{
    private $resources = array();

    /** 得到享元；
     *
     * @param $resourceStr
     * @return mixed
     */
    public function getResource($resourceStr)
    {
        if (isset($this->resources[$resourceStr])) {
            return $this->resources[$resourceStr];
        } else {
            return $this->resources[$resourceStr] = $resourceStr;
        }
    }

    /**
     * 操作
     */
    public function operate()
    {
        // TODO: Implement operate() method.
        foreach ($this->resources as $key => $resource) {
            echo $key . "=>" . $resource . "<br>";
        }
    }
}