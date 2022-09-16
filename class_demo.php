<?php
       /* class is blue print of object .
        it hold data members(properties) and member functions(methods) in it.
        class not provide memory to properties while object is not created,
        but final property or static can be accessed by class name followed by 
        scope resolution (::) sign.
        class provide reusability of code .
        $this repersent the current object of class that call the method*/
        
            class ClassDemo{
                public $stuname;
                public static $classteacher = 'ABC'; //not part of object
                public function get($name){
                    $this->stuname = $name;
                }
                public function show(){
                    echo"the name of student is - $this->stuname";
                    echo"<br>the name of teacher is - ",$this::$classteacher;

                }
            }
            echo "classteacher name for all student - ",ClassDemo::$classteacher;
            echo"<br>";
            $obj = new ClassDemo();
            // creating first object of class
            $obj->get('anus');  
            $obj->show();
?>