<?php

goto a;
echo "Hello a" . PHP_EOL;

a:
echo "Hello END" . PHP_EOL;

// goto operator for loop
$counter = 1;

while (true) {
    echo "While Loop $counter" . PHP_EOL;
    $counter++;
    if ($counter > 10) {
        goto end;
    }
}

end:
echo "End Loopp";