<?php

namespace CjwPhpDesign\Src\Composite;

/** 树枝组件角色(透明模式下)
 *
 * Class TransparentComposite
 * @package CjwPhpDesign\Src\Composite
 */
class TransparentComposite implements TransparentComponent
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
     * @param TransparentComponent $transparentComponent
     */
    public function add(TransparentComponent $transparentComponent)
    {
        $this->_composites[] = $transparentComponent;
    }

    /** 聚集管理方法 删除一个子对象
     *
     * @param TransparentComponent $transparentComponent
     * @return bool
     */
    public function remove(TransparentComponent $transparentComponent)
    {
        foreach ($this->_composites as $key => $row) {
            if ($transparentComponent == $row) {
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