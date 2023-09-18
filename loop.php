<?php 
function isEven($start, $end, $step){
    for($i=$start;$i<=$end;$i+=$step){
        echo $i." ";
    }
}
isEven(2,20,2);

?>