<?php
    class GetSetDemo{
        private $name ='Khushi';
        protected $city = 'Bikaner';
        public function __get($name)
        {
            if(property_exists($this,$name)){
                echo "<br>$name = ",$this->$name;
            }
            else {
                echo"<br>$name = property not exists";
            }
        }
        public function __set($name, $value)
        {
            if(property_exists($this,$name)){
                $this->$name = $value;
            }
            else{
                echo "<br> you can't create new public property here";
            }
        }
        public function getDtl(){
            foreach($this as $pron => $proval){
                echo"<br> $pron = $proval";
            }
        }
    }
    $obj = new GetSetDemo();
    echo $obj->name ; //private
    echo $obj->city;   //protected 
    echo $obj->mobile; // undefined
    echo"<hr>";
    $obj -> name = "heli";
    $obj -> city = "jaipur";
    $obj -> country = "india";
    $obj ->getDtl();

?>