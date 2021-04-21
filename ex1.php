<?php
 $n1 = $_POST["n1"];
 $n2 = $_POST["n2"];
 $n3 = $_POST["n3"];
 
 switch ($n3) {
    case 1:
        echo $n1 + $n2;
        break;
    case 2:
        echo $n1 - $n2;
        break;
    case 3:
        echo $n1 * $n2;
        break;
    case 4:
        echo $n1 / $n2;
        break;
}
  

?> 
