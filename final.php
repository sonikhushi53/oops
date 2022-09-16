<div>
    <b>
       -> We cannot declare property,
        the final modifier is allowed only for methods and classes<br>  
        -> but php's new version (8.1.0)    provide us to create 'final public const'
        property, we can't override that in child  
    </b>
</div>
<?php
    class FinalDemo{
        // final public const name ="final property";
        final public function doNotOverride(){
            echo"<br>this is final method can't be overriding in child class"; 
        }
        public function test(){
            echo"<br> overridden method Test in parent";
        }
    }
    class ChildDemo extends FinalDemo{
        // public function doNotOverride(){
        //     echo"<br> final overriding in child ";
        // }  
           public function test(){
                echo"<br> overriding method Test in child";
            } 
    }
    $objp = new FinalDemo();
    $obj = new ChildDemo();
    $obj->doNotOverride();
    $objp->doNotOverride();
    $obj->test();
    $objp->test();
    ?>

    <div><hr>
    <b>->Example of final class <br>
     ->final class can't contain abstract but vise varsa is possible
     </b>
    </div>
    
    <?php
    final class FinalDemo2{
        public $name = "normal method";
        public function test(){
            echo"<br>$this->name in final class";
        }
        final public function doNotOverride(){
            echo"<br>this is final method in final class"; 
        }
    }
    // class D extends FinalDemo2{}
    $obj2 = new FinalDemo2();
    $obj2->test();
    $obj2->doNotOverride();
?>