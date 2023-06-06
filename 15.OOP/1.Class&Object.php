<?php
    // * class
    // class ClassName{
        // properties (variables)

        // methods (functions)
    // }

    class People{       // create class
        // properties
        public $name;
        public $age;

        // methods
        public function myName($personName){
            $this->name = $personName;      // setter
            echo "My name is $this->name";  // getter
        }

        public function myAgeSetter($personAge){    // setter
            $this->age = $personAge;
        }

        public function myAgeGetter(){  // getter
            echo "$this->name is $this->age years old.";
        }
    }

    $kyawkyaw = new People;   // create object (new)
    // $kyawkyaw->myAgeSetter(25);
    var_dump($kyawkyaw->age); // NULL
    $kyawkyaw->myName("Kyaw Kyaw");   // My name is Kyaw Kyaw
    echo $kyawkyaw->name; // Kyaw Kyaw

    $kyawkyaw->myAgeSetter(26);
    echo $kyawkyaw->age;  // 26
    $kyawkyaw->myAgeGetter(); // I am 26 years old.
    echo "<hr>";

    $hlahla = new People;
    $hlahla->myName("Hla Hla"); // My name is Hla Hla.
    echo $hlahla->name; // Hla Hla

    $hlahla->myAgeSetter(19);
    echo $hlahla->age;  // 19
    $hlahla->myAgeGetter(); // Hla Hla is 19 years old.
?>