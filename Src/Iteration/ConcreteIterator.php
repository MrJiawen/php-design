<?php

namespace CjwPhpDesign\Src\Iteration;

/** 一个具体的迭代器
 *
 * Class ConcreteIterator
 * @package CjwPhpDesign\Src\Iterator
 */
class ConcreteIterator implements Iterator
{
    private $_data;

    public function __construct($data)
    {
        $this->_data = $data;
    }

    public function rewind()
    {
        return reset($this->_data);
    }

    public function key()
    {
        return key($this->_data);
    }

    public function current()
    {
        return current($this->_data);
    }


    public function next()
    {
        return next($this->_data);
    }

    public function valid()
    {
        return ($this->current() !== false);
    }
}