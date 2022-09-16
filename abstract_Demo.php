<?php
    /*
        -> Abstraction is a feature of oops that provide data hiding facility 
        -> We can create abstract class or abstract method by abstract keyword
        -> If a class is abstract then it can't be instantiate(can't create object of that)
            and can hold abstract or non-abstract both type of methods 
        -> If a class have only one abstract method then it is nessasary to declare
           class as abstract but not vice versa
        -> A abstract method is just signature decalaration of method not implimentation
        -> If we inherite a abstract class then it nessasary to either implement abstract 
        method of parent or declare that class as abstract
        ->abstract class only one of powerfull feature that provide access of child's
            method by parent's object in other languages like - c++,java
    */
    abstract class AbstractClass{
        public static function hello(){
            echo"hello method in abstract class";
        }
    }
    // $obj1 = new Abstract_class; //error : can't instantiate abstract class
    AbstractClass::hello();    

    echo "\nExample 2 ---------\n";
    abstract class AbstractClass2{
            abstract public function iam();
    }
    class Child extends AbstractClass2{
       public function iam(){
        echo "i am abstract method overridine in child";
       }
    }
    $obj = new Child();
    $obj -> iam();
?>