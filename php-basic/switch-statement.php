<?php

$nilai = "C";
 switch ($nilai) {
     case "A":
        echo "Anda lulus dengan nilai baik" . PHP_EOL;
        break;
     case "B":
     case "C":
        echo "Anda lulus" . PHP_EOL;
        break;
     case "D":
        echo "Anda tidak lulus" . PHP_EOL;
        break;
     default:
        echo "Mungkin Anda Lapar" . PHP_EOL;
 }

//  kode: switch statement syntax alternatif
switch ($nilai) :
    case "A":
       echo "Anda lulus dengan nilai baik" . PHP_EOL;
       break;
    case "B":
    case "C":
       echo "Anda lulus" . PHP_EOL;
       break;
    case "D":
       echo "Anda tidak lulus" . PHP_EOL;
       break;
    default:
       echo "Mungkin Anda Lapar" . PHP_EOL;
endswitch;