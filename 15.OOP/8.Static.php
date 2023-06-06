<?php
    // Static methods can be called directly - without creating an instance of the class first.
    // static           (::)

    class AboutMe{

        public static $name = "Aung Aung";
        public static $age = 19;

        public static function myName($name){
            static::$name = $name;                  // $this -> static, self
            echo "I am $name";
        }

        public static function myAge($age){
            self::$age = $age;
            echo "I am $age";
        }
    }

    echo AboutMe::$name;  // Aung Aung
    AboutMe::myName("Destiny");
    AboutMe::myAge(23);
    echo AboutMe::$name;    // Destiny
    echo AboutMe::$age;     // 23


    class Mother{
        protected static function getValue(){
            return "Hello Mello";
        }
    }

    class Child extends Mother{
        public $value;

        public function __construct(){
            $this->value = parent::getValue();
        }
    }

    $name = new Child;
    echo $name->value;

?>