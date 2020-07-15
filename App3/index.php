<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App3</title>
</head>
<body>
    <?php
$my_array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 0];
print('Mūsų turimas masyvas: ');
for ($i = 0; $i < count($my_array); $i++) {
    print($my_array[$i] . ' ');
}
print('<br> Penktasis narys: ');
print($my_array[4]);
print('<br> Penktąjį narį keičiame į: ');
print($my_array[4] = 55);
print('<br> Dabar mūsų turimas masyvas: ');
for ($i = 0; $i < count($my_array); $i++) {
    print($my_array[$i] . ' ');
}
print('<br> Pridedame pora naujų ("11" ir "12") reikšmių į masyvo galą: ');
array_push($my_array, 11, 12);
print('<br> Masyvas = ');
for ($i = 0; $i < count($my_array); $i++) {
    print($my_array[$i] . ' ');
}
print('<br> Šiuo metu mūsų masyvo ilgis yra = ' . count($my_array));
print('<br> Ištriname paskutines reikšmes t.y. "11" ir "12" iš masyvo: ');
array_splice($my_array, 10, 2 );
print('<br> Dabar mūsų masyvas = ');
for ($i = 0; $i < count($my_array); $i++) {
    print($my_array[$i] . ' ');
}
print('<br> Surandame narį su 55 reikšme: ' . array_search(55, $my_array) . ' - jo indeksas');
print("<br> Surušiuojame savo masyvą didėjimo tvarka: ");
sort($my_array);
for ($i = 0; $i < count($my_array); $i++) {
    print($my_array[$i] . ' ');
}
print('<br> Išrūšiuojame masyvą, paliekame tik lyginius narius: ');
$my_array_filtered = array_filter($my_array, 'arLyginis');
function arLyginis($iNarys) {
    if ($iNarys % 2 == 0) 
    return true;
    else
    return false;
};
for ($i = 0; $i < count($my_array); $i++) {
    print('<br> Indeskas=' . $i . ' reikšmė=' . $my_array_filtered[$i] . ' ');
}
print('<br><br> Sutvarkome indeksus:');
$my_array_filtered = array_values(array_filter($my_array_filtered));
for ($i = 0; $i < count($my_array); $i++) {
    print('<br> Indeskas=' . $i . ' reikšmė=' . $my_array_filtered[$i] . ' ');
}
$add = [10];
$my_array_new = array_splice($my_array_filtered, 4, 0, $add);
print('<br>' . count($my_array_new));

    ?>


</body>
</html>