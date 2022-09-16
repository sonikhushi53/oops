<?php
    class Account{
        public $account_holder;
        private $account_no;
        protected $account_balance;
        public static $type = "private"; //not part of object
        public function __construct($ah,$an,$ab)
        {
            $this->account_holder = $ah;
            $this->account_no = $an;
            $this->account_balance = $ab;
        }
        public function showDtl(){
            echo "account_holder  = $this->account_holder";
            echo "<br>account_no  = $this->account_no";
            echo "<br>account_balance = $this->account_balance";
    
    
        }
    }
    class Person extends Account{
        public function test(){
            echo"<br> in child <br>";
            print_r($this);
            // print_r($this->account_no); now we can't access private
            print_r($this->account_balance);


        }
    }
    $ob1 = new Person("rani",99999,5000);
    $ob1->test();
    $sbi =new Account("xyz",2632232,75000);
    $sbi -> showDtl();   
    echo "\n print properties by object-:\n";
    echo $sbi -> account_holder;
    // echo "\n $sbi->account_no"; //can't access private property
    // echo "\n $sbi->account_balance"; // can't access protected property
    
    echo " \n object can't access private or protected but still hold them -: \n";
    print_r($sbi);
    
    // echo $sbi ->type; // undefined property for object
    echo Account::$type; //static is part of class

?>