<?php
// multiple inheritence
trait Greeting{
    public function greeting(){
        echo "Hello Mello";
    }

    public function hi(){
        echo "hi There";
    }
}

trait Farewell{
    public function farewell(){
        echo "Good Bye!";
    }

    public function test(){
        echo "How are you?";
    }
}

class Testing{
    use Greeting, Farewell;
}

$testing = new Testing;
$testing->greeting();   // Hello Mello
$testing->hi();         // hi There
$testing->farewell();   // Good Bye!
$testing->test();       // How are you?



// class Class1{           // trait
//     ...
// }

// class Class2{           // trait
//     ...
// }

// class Class1 extends Class2; 
// class Testing extends Class1;    // class Testing{ use Class1, Class2; }
?>