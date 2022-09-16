<?php
    /* -> Encapsulation is feature of oops that provide data hiding & data binding .
    -> Data binding bind property or methods together in class 
    -> Data hiding is achive by accessifiers that are private, protected, public
    -> private members of class only accessed in self class
    -> protected members of class accessed by self or child class
    -> Both not accessed by global scope
    -> Public members can accessed by self class,child class or via object of parent
    and child in global scope also   
    
    */
    class Demo{
        private $name ='khushi';
        public $city = 'Bikaner';
        protected $mobile = 561687;
        private function findDtl()
        {
            echo "In parent -:\n";
            echo "private -: $this->name";
            echo "\npublic -: $this->city";
            echo"\n protected -: $this->mobile";
        }
        public function showDtl(){
            $this->findDtl();
        }
    }
    class ChildDmo extends Demo{
        public function show(){
            echo "\nproperties that inherit in child from parent";
            foreach($this as $proname=> $proval){
                echo"\n$proname = $proval";
            }
        }
    }
    $obj = new Demo();
    // $obj->findDtl(); can't call to the private method of class
    $obj -> showDtl();
    $obj = new ChildDmo();
    $obj-> show();
?>