<?php
    // inheritance (extends)

    class Food{
        public $name = "Pizza";
        public $price;

        public function getName($name){
            $this->name = $name;
            return "Food name is $this->name.";
        }

        public function getPrice($price = "$10"){
            $this->price = $price;
            return "Its price is $this->price.";
        }
    }

    class Shop extends Food{
        
        public function shopPlace($location){
            return "We can get it at $location.";
        }
    }

    class Instock extends Shop{
        public function instockItem($item = 0){
            if($item != 0){
                return "We can order.";
            }
            return "It is out of stock.";
        }
    }

    $pizza = new Instock;
    echo $pizza->getName("Cheese Pizza");   // Food name is Cheese Pizza.
    echo $pizza->getPrice();                // Its price is $10.
    echo $pizza->shopPlace("Pizza Hut");    // We can get it at Pizza Hut.
    echo $pizza->instockItem(10);           // We can order.
?>