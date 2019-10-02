<?php
fscanf(STDIN,"%d %d",$a,$b);
$product = $a * $b;
if(($product%2) === 0 ){
    echo 'Even';
}else{
    echo 'Odd';
}