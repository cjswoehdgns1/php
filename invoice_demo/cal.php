<?php 
$sum = 0;
foreach($_GET as $getitem){
    $sum += $getitem;
}
echo $sum;
?>