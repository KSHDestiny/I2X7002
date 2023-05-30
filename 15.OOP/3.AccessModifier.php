<?php
    // * public       //  the property or method can be accessed from everywhere. This is default
    // * protected    //  the property or method can be accessed within the class and by classes derived from that class
    // * private      // the property or method can ONLY be accessed within the class

    class Fruit{
        public $name;
        protected $color;
        private $price;

        public function __construct($name, $color, $price){
            $this->name = $name;
            $this->color = $color;
            $this->price = $price;
        }

        private function fruitNameGetter(){
            return "The fruit is $this->name.";
        }

        protected function fruitColorGetter(){
            return "The fruit is $this->color.";
        }

        public function fruitPriceGetter(){
            return "The price is $this->price.";
        }

        public function withinClassName(){
            return $this->fruitNameGetter();
        }

        public function withinClassColor(){
            return $this->fruitColorGetter();
        }
    }

    $apple = new Fruit("Apple","red","1000");

    echo $apple->name;  // Apple
    // echo $apple->color; // protected error
    // echo $apple->price; // private error
    // echo $apple->fruitNameGetter();     // private error
    // echo $apple->fruitColorGetter();    // protected error
    echo $apple->fruitPriceGetter();    // The price is 1000.
    echo $apple->withinClassName();  // The fruit is Apple.
    echo $apple->withinClassColor(); // The fruit is red.
?>