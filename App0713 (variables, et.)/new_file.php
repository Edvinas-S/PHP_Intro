<?php

$name = 'PHP';
$group = '< div >';
echo
"<h1>Sveiki, $group!</h1>
Mano vardas <span style=\"color: red\">$name</span>";

$skaicius_1 = 13;
$skaicius_2 = 2;
$tekstas_1 = "13";
$tekstas_2 = "2";

echo
"<p></p>
<div>Musu turimi skaiciai: pirmas - $skaicius_1, antras - $skaicius_2 (skaiciaus tipo) ir $tekstas_1, $tekstas_2 (string tipo)<br>
Jei naudojame + (pliuso) zenkla gaunasi: </div>";
echo
'Skaiciai = '; 
print($skaicius_1 + $skaicius_2);
echo 
'<br>Tekstas = ';
print($tekstas_1 + $tekstas_2);
echo
'<br>Jei naudojame . (taska) gaunasi: '; 
echo
'<br>Skaiciai = ';
print($skaicius_1 . $skaicius_2);
echo 
'<br>Tekstas = ';
print($tekstas_1 . $tekstas_2);
echo
'<br>pabandome misru tipa: <br>
skaicius_1 + tekstas_1 = ';
print($skaicius_1 + $tekstas_1);
echo
'<br>skaicius_2 . tekstas_2 = ';
print($skaicius_2 . $tekstas_2);
echo '<p></p>';

$foo = 'Edvinas';
$var_01 = 9;
$var_02 = 11;
$var_03 = $var_01 + $var_02;
echo <<<EOT
Hello $foo.<br>
9 + 11  = $var_03<br>
Goodbye!

EOT;


?>