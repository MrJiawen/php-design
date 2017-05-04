<?php

namespace CjwPhpDesign\Src\Composite;

/** 树枝组件角色(安全模式下)
 *
 * Class SecurityComposite
 * @package CjwPhpDesign\Src\Composite
 */
class SecurityComposite implements SecurityComponent
{
    private $_composites;

    public function __construct()
    {
        $this->_composites = array();
    }

    public function getComposite()
    {
        return $this;
    }

    public function operation()
    {
        foreach ($this->_composites as $composite) {
            $composite->operation();
        }
    }

    /** 聚集管理方法 添加一个子对象
     *
     * @param SecurityComponent $securityComponent
     */
    public function add(SecurityComponent $securityComponent)
    {
        $this->_composites[] = $securityComponent;
    }

    /** 聚集管理方法 删除一个子对象
     *
     * @param SecurityComponent $securityComponent
     * @return bool
     */
    public function remove(SecurityComponent $securityComponent)
    {
        foreach ($this->_composites as $key => $row) {
            if ($securityComponent == $row) {
                unset($this->_composites[$key]);
                return TRUE;
            }
        }
        return FALSE;
    }

    /** 聚集管理方法 返回所有的子对象
     *
     * @return array
     */
    public function getChild()
    {
        return $this->_composites;
    }

}