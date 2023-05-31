<?php
    // polymorphism
    // * difference between interfaces and abstract classes
    // ! Interfaces cannot have properties, while abstract classes can
    // ! All interface methods must be public, while abstract class methods is public or protected
    // ! All methods in an interface are abstract, so they cannot be implemented in code and the abstract keyword is not necessary
    // ! Classes can implement an interface while inheriting from another class at the same time

    // interface Interfacename{
            // methods
            // public function someMethod();
    // }

    interface Subject{
        public function myanmar($mark);
        public function english($mark);
        public function math($mark);
    }

    class Minor{
        public $name;

        public function __construct($name){
            $this->name = $name;
        }

        public function science($mark){
            return "$this->name got $mark in Science.";
        }

        public function bio($mark){
            return "$this->name got $mark in Biology.";
        }
    }

    class Person extends Minor implements Subject{

        public function myanmar($mark){
            return "$this->name got $mark in Myanmar.";
        }

        public function english($mark){
            return "$this->name got $mark in English.";
        }

        public function math($mark){
            return "$this->name got $mark in Math.";
        }
    }

    $mgmg = new Person("Mg Mg");
    echo $mgmg->myanmar(70);    // Mg Mg got 70 in Myanmar.
    echo $mgmg->english(80);    // Mg Mg got 80 in English.
    echo $mgmg->math(95);       // Mg Mg got 95 in Math.
    echo $mgmg->science(88);    // Mg Mg got 88 in Science.
    echo $mgmg->bio(100);       // Mg Mg got 100 in Biology.
    echo "<hr>";

    $agag = new Person("Aung Aung");
    echo $agag->myanmar(50);    // Aung Aung got 50 in Myanmar.
    echo $agag->english(55);    // Aung Aung got 55 in English.
    echo $agag->math(40);       // Aung Aung got 40 in Math.
    echo $agag->science(46);    // Aung Aung got 46 in Science.
    echo $agag->bio(60);       // Aung Aung got 60 in Biology.
?>