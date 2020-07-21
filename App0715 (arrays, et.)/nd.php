<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ND_2</title>
</head>
<body>
    <?php
$my_array = array(
    'Edvinas' => 75,
    'Kornelijus' => 85,
    'Juzefa' => 60,
    'Babajaga' => 99,
    'Budulis' => 77
);

echo '<br> Mūsų žmogelių svoriai yra: <br>';
print_r($my_array);
echo '<br><br> Lengviausias žmogus iš duotų yra: ' . array_search(min($my_array), $my_array);
echo '<br><br> Sunkiausias : ' . array_search(max($my_array), $my_array);
echo '<br><br> Surikiuojame nuo lengviausio: <br>';
asort($my_array);
print_r($my_array);
echo '<br><br> Mūsų žmogeliukų bendras svoris yra: ' . array_sum($my_array);
if (array_sum($my_array) < 500) 
    return print('<br><br> Mūsų chebrytė galės kilti liftu!!');
    else 
    return print('<br><br> Deja mes persunkūs :)');

    ?>

</body>
</html>