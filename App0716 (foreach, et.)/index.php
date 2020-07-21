<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2020-07-16</title>
</head>
<body>
    <?php
// ************  1. PUNKTAS  ************
    $simple_array = [1,2,9,8,5];
    $assoc_array = array(
        'Skaičius' => 777,
        'Tekstas' => 'jou',
        'Bet_kas' => 666
    );
    echo 'Paprastas masyvas - '; print_r($simple_array);
    echo '<br>';
    echo 'Asociatyvus masyvas - '; print_r($assoc_array);
    echo '<br><br>';
    echo 'Paprastas masyvas spausdinamas pagal sąlygą (su kableliu tarp): ';
    for ($i = 0; $i < count($simple_array); $i++) {
        if ($i != count($simple_array) - 1) {
            print($simple_array[$i] . ', ');
        } else
        print($simple_array[$i]);
    }
    echo '<br><br>';
    echo 'Asociatyvus masyvas spausdinamas pagal sąlygą (su kableliu tarp): ';
    for ($j = 0; $j < count($assoc_array); $j++) {
        if ($j != count($assoc_array) - 1) {
        print(array_keys($assoc_array)[$j] . ', ' . $assoc_array[array_keys($assoc_array)[$j]] . ', ');
        } else 
        print(array_keys($assoc_array)[$j] . ', ' . $assoc_array[array_keys($assoc_array)[$j]]);
    }
    echo '<br><br>';
// ************  2. PUNKTAS  ************
    echo 'Išvardiname paprasto masyvo kas antrą narį: ';
    for ($i = 0; $i < count($simple_array); $i=$i+2) {
        if ($i != count($simple_array) - 1) {
            print($simple_array[$i] . ', ');
        } else
        print($simple_array[$i]);
    }
    echo '<br><br>';
    echo 'Išvardiname asociatyvaus masyvo kas antrą narį: ';
    for ($j = 0; $j < count($assoc_array); $j=$j+2) {
        if ($j != count($assoc_array) - 1) {
            print(array_keys($assoc_array)[$j] . ', ' . $assoc_array[array_keys($assoc_array)[$j]] . ', ');
            } else 
            print(array_keys($assoc_array)[$j] . ', ' . $assoc_array[array_keys($assoc_array)[$j]]);
    }
    echo '<br><br>';

    ?>

</body>
</html>