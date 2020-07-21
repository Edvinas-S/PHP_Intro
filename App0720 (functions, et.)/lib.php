<?php
    function sort_my_array(array $array) {
        $temp = 0;
        for ($i = 0; $i < count($array); $i++) {
            for ($j = 1; $j < count($array); $j++) {
                if ($array[$i] > $array[$j]) {
                    $temp = $array[$i];
                    $array[$i] = $array[$j];
                    $array[$j] = $temp;
                }
            }
        }
    }
?>