<?php

function generateFibonacciSeries($numTerms) {
    $first = 0;
    $second = 1;
    
    for ($i = 0; $i < $numTerms; $i++) {
        echo $first . ' ';
        
        $next = $first + $second;
        $first = $second;
        $second = $next;
    }
}

$numTerms = 15;
echo "First $numTerms Fibonacci numbers: ";
generateFibonacciSeries($numTerms);

?>