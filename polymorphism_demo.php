<?php
    /*
        -> polymorphism is one of the powerfull feature of oops, here poly is a greek 
            word that means that means many and morphism means forms 
        -> polymorphism have 2 part 
            1. run time/dynamic bindind
                a.method overriding
            2. compile time/static binding
                a. method overloading 
                b. operator overloading
        -> PHP support only run time polymorphism
       * -> method overriding say that perent and child have same name and signature 
            ->The method in the parent class is called overridden method, 
            while the method in the child class is known as the overriding method. 
            The code in the overriding method overrides (or replaces) 
            the code in the overridden method.

        -> Method overloading say same name of method with diffrent signature
            (differ number or type of perameter)
        -> Operator overloading say that add a new feature to existing operator without 
            changing it original meaning 
    */
    class Parent_poly {
        public function show(){
            echo"<br> Hello I am show function in ",__CLASS__," class";

        }
    }
    class Child extends Parent_poly{
        public function show(){
            echo"<br> Hello I am show function in ",__CLASS__," class";
        }
    }
    $ob = new Child(); 
    $ob->show();
    // when child don't have this method then it call to the parent one
    $obp = new Parent_poly;
    $obp->show();
?>