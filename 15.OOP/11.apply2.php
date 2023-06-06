<?php
    interface Operator{
        public function connect();
    }

    class MyanmarNet implements Operator{
        public function connect(){
            return "MyanmarNet wifi is connected.";
        }
    }

    class UniLink implements Operator{
        public function connect(){
            return "UniLink wifi is connected.";
        }
    }

    class Hi{
        public function connect(){
            return "Hi wifi is connected.";
        }
    }

    class Connection{
        public function connectMessage(Operator $operator){

            // if($operator instanceof Operator){
            //     return $operator->connect();
            // }
            // return "Connection Fails";

            return $operator->connect();
        }
    }

    $myanmarnet = new MyanmarNet;
    $unilink = new UniLink;
    $hi = new Hi;

    $connection = new Connection;
    echo $connection->connectMessage($myanmarnet);

    // var_dump($myanmarnet instanceof Operator)
?>