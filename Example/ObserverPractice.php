<?php

namespace CjwPhpDesign\example;


use CjwPhpDesign\Src\Observer\ObserverStudentA;
use CjwPhpDesign\Src\Observer\ObserverStudentB;
use CjwPhpDesign\Src\Observer\ObserverStudentC;
use CjwPhpDesign\Src\Observer\SubjectStudent;

class ObserverPractice
{
    public function __construct()
    {
        echo "观察者模式：<br><br>";

        $subjectStudent = new SubjectStudent();

        $subjectStudent->addObserver(new ObserverStudentA());
        $subjectStudent->addObserver(new ObserverStudentB());
        $subjectStudent->addObserver(new ObserverStudentC());
        $subjectStudent->sendMsg("学生集合");

        echo "<br>移除学生观察者B，如下所示:<br>";
        $subjectStudent->removeObserver('studentB');
        $subjectStudent->sendMsg("学生再次集合");
    }
}