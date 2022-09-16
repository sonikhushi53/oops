<?php
    include("file1.php");
    include("file2.php");
    use first\Greet;
    use second\Greet as Greet2;

    use function first\helloworld;
    use function second\helloworld as hiworld;

    $obj = new Greet;
    $obj->greet();

    $obj2 = new Greet2;
    $obj2->greet();

    helloworld();
    hiworld();

?>