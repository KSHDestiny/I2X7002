<?php
    class ChangeType{
        public $string;

        public function __construct($string){
            $this->string = $string;
        }

        public function replaceString($find, $new){
            $this->string = str_replace($find, $new, $this->string);
            return $this;
        }

        public function lowerString(){
            $this->string = strtolower($this->string);
            return $this;
        }

        public function upperString(){
            $this->string = strtoupper($this->string);
            return $this;
        }

        public function upperWord(){
            $this->string = ucwords($this->string);
            return $this;
        }

        public function shuffleString(){
            $this->string = str_shuffle($this->string);
            return $this;
        }

        public function get(){
            return $this->string;
        }
    }

    $mystring = new ChangeType("U_Ba_Htoo");
    $data = $mystring->replaceString("_"," ")->upperWord()->get();
    echo $data;

    // $mystring->replaceString("_"," ")                                == $mystring
    // $mystring->replaceString("_"," ")->lowerString()                 == $mystring            // $mystring->lowerString()
    // $mystring->replaceString("_"," ")->lowerString()->upperString()  == $mystring            // $mystring->upperString()
?>