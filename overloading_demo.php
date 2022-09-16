<?php
    /*
    -> Method overloading say same name of method with diffrent signature
            (differ number or type of perameter)
    -> PHP don't support method or function overloading 
    bcz php not consider parameters in method or function 's signature ,
    only name of that is consider as signature
    -> Either we can't create overloading in parent - child relation other then constructor 
   -> But their are several ways by that we can feel the overriding in PHP
    -> by rest operator
    -> by call_get_args and call_num_args
    -> by magic methods 
        -> __call
        -> __callStatic
    -> by default perameter 
    */
    class Over{
        public function addition($a=0,$b=0, $c=0)
        {
            return $a+$b+$c;
        }
        public function restingSum(...$arg)
        {
            return array_sum($arg);
        }
        public function __call($name, $arguments)
        {
            if($name == 'sum')
            {
                if(count($arguments)>0 && count($arguments)<4 )
                {
                //    echo call_user_func_array([$this,'addition'],$arguments);
                echo $this->addition(...$arguments);
                }
            }
            else{
                echo"method not exists";
            }
        }
    }
    $obj = new Over();
    echo"<br> passing 0 arg - ", $obj -> addition();
    echo"<br> passing 1 arg - ", $obj -> addition(7);
    echo"<br> passing 2 arg - ", $obj -> addition(5,15);
    echo"<br> passing 3 arg - ", $obj -> addition(10,7,13);
    echo "<br><br> ------ by rest operator --------<br>";
    echo"<br> passing 0 arg - ", $obj -> restingSum();
    echo"<br> passing 1 arg - ", $obj -> restingSum(7);
    echo"<br> passing 2 arg - ", $obj -> restingSum(5,15);
    echo"<br> passing 3 arg - ", $obj -> restingSum(10,7,13);
    echo "<br><br> ------ by __call --------<br>";
    $obj->sum(4,78);
?>