<?php
    class School{
        private $name;
        // private $city;
        private static $total;
        public function __construct($n,$c)
        {   self::$total++;
            $this->name = $n;
            // $this->city = $c;
            echo "\n$this->name is comming to school";    
        }
        public function __destruct()
        {
            echo "\n$this->name is going home";
        }
        // public function getDtl(){
        //     echo "\n name is -: $this->name";
        //     echo "\n city is -: $this->city";

        // }
    }
    $student1 = new School('ram','bikaner');// call constructor automatically
    // $student1->getDtl();
    $stu2 = new school('anika','jaipur');
    // $stu2->getDtl();
    $stu3 = new school('eli','udaipur');
    // $stu3->getDtl();
?>