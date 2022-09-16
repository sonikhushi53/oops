<div>
    <b>
        ->autoload works with <br>
        &nbsp; ->class <br>
        &nbsp; ->interface <br>
        &nbsp; ->trait<br><hr>

    </b>
</div>
<?php
    spl_autoload_register(function($name){
        include $name.".php";
        echo "\n<br> $name.php is included";
    });
    new Other1();
    abstract class Demo implements other_inter{
        use trait_auto; 
    }
    // use name\mm;
    // new mm(); not work with namespace
    

?>""