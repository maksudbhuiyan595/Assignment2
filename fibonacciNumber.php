<?php 
$previous = 0;
$current = 1;
$count = 0;

echo "First 10 Fibonacci numbers:\n";

while ($count < 10) {
    echo $current . " ";

    if ($current > 100) {
        echo "(Exceeds 100)";
        break;
    }

    $next = $previous + $current;
    $previous = $current;
    $current = $next;

    $count++;
}


?>