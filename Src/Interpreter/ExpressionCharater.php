<?php

namespace CjwPhpDesign\Src\Interpreter;

/**具体的表达角色
 * Class ExpressionCharater
 * @package CjwPhpDesign\Src\Interpreter
 */
class ExpressionCharater extends Expression
{
    function interpreter($str)
    {
        return strtoupper($str);
    }
}
