<?php

$evensum = 0;
$oddsum = 0;
for ($i=1; $i<=10; $i++) {
    echo $i;
    if ($i % 2 == 0) {
        echo "even<br>";
    } else {
        echo "odd<br>";
    }
}
