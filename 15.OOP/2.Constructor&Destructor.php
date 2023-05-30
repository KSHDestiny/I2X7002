<?php
    // * constructor
    // If you create a __construct() function, PHP will automatically call this function when you create an object from a class.

    class Dog{
        public $name;
        public $color;

        public function __construct($name, $color){
            // echo "This is construct function.";
            $this->name = $name;
            $this->color = $color;
        }

        public function dogName(){
            return "Dog's name is $this->name.";
        }

        public function dogColor(){
            return "Its color is $this->color.";
        }
    }

    $black = new Dog("Black", "black");
    echo $black->dogName();  // Dog's name is Black.
    echo $black->dogColor();    // Its color is black.
    echo "<br>";

    $shweWah = new Dog("Shwe Wah","yellow");
    echo $shweWah->dogName();   // Dog's name is Shwe Wah.
    echo $shweWah->dogColor();  // Its color is yellow.
    echo "<hr>";


    // * destructor
    // If you create a __destruct() function, PHP will automatically call this function at the end of the script.

    class Cat{
        public $name;
        public $color;

        public function __construct($name, $color){
            // echo "This is construct function.";
            $this->name = $name;
            $this->color = $color;
            echo "This is construct funtion $this->name. <br>";
        }

        public function catName(){
            return "Cat's name is $this->name.";
        }

        public function catColor(){
            return "Its color is $this->color.";
        }

        public function __destruct(){
            echo "This is destruct funtion $this->name. <br>";
        }
    }

    $phyuPhway = new Cat("Phyu Phwe", "white");
    echo $phyuPhway->catName();
    echo $phyuPhway->catColor();
    echo "<br>";

    $gitee = new Cat("Gitee", "brown");
    echo $gitee->catName();
    echo "<br>";

    $pinky = new Cat("Pinky", "pink");
    echo $pinky->catName();
    echo "<br>";
?>