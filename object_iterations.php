<?php
    class Iteration{
        public $name;
        private $control;
        protected $type;
        public function __construct($n,$c,$t){
            $this->name = $n;
            $this->control = $c;
            $this->type = $t;
        }
        public function test(){
            echo"<br>----- $this->name -------<br>";
            foreach($this as $proname => $proval)
            {
                echo "<br>$proname = <b> $proval</b>";
            }
        }
    }
    $obj1 = new Iteration('for','entry','manual');
    $obj2 = new Iteration('foreach','entry','automatic');
    $obj3 = new Iteration('while','exit','manual');
    $obj1->test();
    $obj2->test();
    $obj3->test();

?>