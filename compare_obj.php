<?php
    class A{
        public int $f =7;
    }
    class B{
        public int $f =7;
    }
    $ao = new A();
    $ao2 = new A();
    $bo = new B();
    $bo2 = $bo;
    echo "<br>ao == ao2<br>";
    var_dump($ao==$ao2);

    echo "<br>ao === ao2<br>";
    var_dump($ao===$ao2);

    echo "<br>ao == bo<br>";
    var_dump($ao==$bo);
    
    echo "<br>bo == bo2<br>";
    var_dump($bo==$bo2);

    echo "<br>bo === bo2<br>";
    var_dump($bo===$bo2);
?>