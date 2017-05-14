<?php

namespace CjwPhpDesign\Src\Interpreter;

/**解释器
 * Class Interpreter
 * @package CjwPhpDesign\Src\Interpreter
 */
class Interpreter
{
    public function execute($string)
    {
        $expression = null;
        for ($i = 0; $i < strlen($string); $i++) {
            $temp = $string[$i];
            switch (true) {
                case is_numeric($temp):
                    $expression = new ExpressionNum();
                    break;
                default:
                    $expression = new ExpressionCharater();
            }
            echo $expression->interpreter($temp);
            echo "<br>";
        }
    }
}