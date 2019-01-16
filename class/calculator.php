<?php
    class Calculator {
        private $total;
        private $num1;
        private $num2;

        function __construct(){
            $this->total = 0;
            $this->num1 = 0;
            $this->num2 = 0;
        }

        public function setNum1($num1){
            $this->num1 = $num1;
        }

        public function setNum2($num2){
            $this->num2 = $num2;
        }

        public function sum(){
            $this->total = $this->num1 + $this->num2;
        }

        public function sub(){
            $this->total = $this->num1 - $this->num2;
        }

        public function multi(){
            $this->total = $this->num1 * $this->num2;
        }

        public function divi(){
            $this->total = $this->num1 / $this->num2;
        }

        public function getTotal(){
            return $this->total;
        }
    }
?>
