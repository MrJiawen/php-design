<?php

namespace CjwPhpDesign\example;

use CjwPhpDesign\Src\Strategy\ConcreteStrategyA;
use CjwPhpDesign\Src\Strategy\ConcreteStrategyB;
use CjwPhpDesign\Src\Strategy\ConcreteStrategyC;
use CjwPhpDesign\Src\Strategy\Question;

class StrategyPractice
{
    public function __construct()
    {
        echo "策略模式：<br><br>";
        $strategyA = new ConcreteStrategyA();
        $question = new Question($strategyA);
        $question->handle_question();

        $strategyB = new ConcreteStrategyB();
        $question = new Question($strategyB);
        $question->handle_question();

        $strategyC = new ConcreteStrategyC();
        $question = new Question($strategyC);
        $question->handle_question();
    }
}
