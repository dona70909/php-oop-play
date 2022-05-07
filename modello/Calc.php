<?php

    
    class Calc {
        
        public $operator;
        public $numberOne;
        public $numberTwo;


        public function __construct($operator,$numberOne,$numberTwo)
        {
            $this->operator = $operator;
            $this->numberOne = $numberOne;
            $this->numberTwo = $numberTwo;
        }



        public function calcolo() {

            switch ($this->operator) {
                case 'add':
                    $result = $this->numberOne + $this->numberTwo; 
                    return $result;
                    break;

                case 'sub':
                    $result = $this->numberOne - $this->numberTwo; 
                    return $result;
                    break;

                case 'div':
                    $result = $this->numberOne / $this->numberTwo; 
                    return $result;
                    break;

                case 'mult':
                    $result = $this->numberOne * $this->numberTwo; 
                    return $result;
                    break;
                
                default:
                    echo "errore";
                    break;
            }
        }

        public function getOperator() {
            switch ($this->operator) {
                case 'add':
                    return  "+";
                    break;

                case 'sub':
                    return  "-";
                    break;

                case 'div':
                    return  "/";
                    break;
                case 'mult':
                    return  "*";
                    break;        
                default:
                    return "error";
                    break;
            }
        }

    
    }
?>