<?php
    // when a child class is inherited from an abstract class,
    // ! The child class must use all abstract methods from parent abstract class.
    // ! The child class method must be defined with the same or a less restricted access modifier.     // (can't use abstract private method)
    // ! The number of required arguments must be the same. However, the child class may have optional arguments in addition.

    // abstract class AbstractClass{
        // properties

        // methods

        // (abstract public function functionName();
    // }

    // class AnotherClass extends AbstractClass{

    // }

    abstract class Human{
        public $name;
        public $age;

        public function __construct($name, $age){
            $this->name = $name;
            $this->age = $age;
        }

        abstract protected function mySelf($job);

        abstract public function greeting();
    }

    class MgMg extends Human{
        public function mySelf($job, $location = "Yangon"){
            return "My name is $this->name. I am $this->age years old. I am a $job. I live in $location.";
        }

        public function greeting(){
            return "Hello Mello";
        }
    }

    class HlaHla extends Human{
        public function mySelf($job, $salary = 400000){
            return "My name is $this->name. I am $this->age years old. I am a $job. I have got $salary";
        }

        public function greeting(){
            return "Hello Hla Hla";
        }
    }

    $mgmg = new MgMg("Mg Mg",21);
    $hlahla = new HlaHla("Hla Hla",19);

    echo $mgmg->mySelf("designer"); // My name is Mg Mg. I am 21 years old. I am a designer. I live in Yangon.
    echo $mgmg->greeting(); // Hello Mello
    echo "<hr>";

    echo $hlahla->mySelf("developer");
?>