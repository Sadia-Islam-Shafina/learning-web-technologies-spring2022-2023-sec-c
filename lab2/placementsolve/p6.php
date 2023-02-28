<?php
$numbers = array(1, 3, 5, 8, 10, 15);

$searchNum = 10;
$flag = false;

foreach ($numbers as $num) {
    if ($num == $searchNum) {
        echo "Number " . $searchNum . " found in the array.";
        $flag = true;
        break;
    }
}

if (!$flag) {
    echo "Number " . $searchNum . " not found in the array.";
}
?>