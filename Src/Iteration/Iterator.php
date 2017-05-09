<?php

namespace CjwPhpDesign\Src\Iteration;

/** 迭代器的标准接口
 * Interface Iterator
 * @package CjwPhpDesign\Src\Iterator
 */
interface Iterator
{
    public function rewind();

    public function key();

    public function current();

    public function next();

    public function valid();
}