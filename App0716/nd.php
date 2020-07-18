<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daugybos lentelė</title>
    <style>
    table, td {
        border: 1px solid black;
        border-collapse: collapse;
        padding: 4px;
        text-align: left;
    }
    </style>
</head>
<body>
    <content style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%)">
        <table>
        <?php
        for ($i = 1; $i <= 9; $i++) {
            print('<tr>');
            for ($j = 1; $j <= 9; $j++) {
                print('<td>'.$i.'x'.$j.'='.$i * $j.'</td>');
            }
        }
        ?>
        </table>
        <br>
    <form action="/App0716/calculated.php" method="POST">
        <div>Kokio dydžio daugybos lentelę norime turėti?</div>
        <label for="x">x </label><input type="text" name="x"><br>
        <label for="y">y </label><input type="text" name="y"><br>
        <input type="submit" value="Skaičiuoti"></input>
    </form>
    </content>
</body>
</html>