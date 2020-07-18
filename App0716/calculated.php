<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tavo lentelė</title>
    <style> 
    table, td {
        border: 1px solid black;
        padding: 4px;
        text-align: center;
    }
    </style>
</head>
<body>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") { 
            $x = $_REQUEST['x']; 
            $y = $_REQUEST['y'];
        };
    ?>
    <content style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%)">
        <table>
            <?php
                for ($i = 1; $i <= $y; $i++) {
                    print('<tr>');
                    for ($j = 1; $j <= $x; $j++) {
                        print('<td>'.$i * $j.'</td>');
                    }
                }

            ?>           
        </table>
    </content>
</body>
</html>