<?php

namespace CjwPhpDesign\Src\Interpreter;

/** 具体的表达角色
 * Class ExpressionNum
 * @package CjwPhpDesign\Src\Interpreter
 */
class ExpressionNum extends Expression
{
    function interpreter($str)
    {
        switch ($str) {
            case "0":
                return "零";
            case "1":
                return "一";
            case "2":
                return "二";
            case "3":
                return "三";
            case "4":
                return "四";
            case "5":
                return "五";
            case "6":
                return "六";
            case "7":
                return "七";
            case "8":
                return "八";
            case "9":
                return "九";
        }
    }
}