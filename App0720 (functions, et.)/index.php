<?php declare(strict_types=1);?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2020-07-20</title>
</head>
<body>
    <?php
        require 'lib.php';
        $array = array(8, 6, 7, 5, 1, 0, 3, 2, 4, 9);
        print('Musu nerūšiuotas skaičių masyvas: ');
        print_r($array);
        print('<br> Po funkcijos, kuri surušiuoja: ');
        $sorted = sort_my_array($array);                //NOT WORKING
        print_r($sorted);
    ?>
    
</body>
</html>