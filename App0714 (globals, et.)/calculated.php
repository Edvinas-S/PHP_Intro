<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KMI skaiciuokle</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") { 
            $height = $_REQUEST['height']; 
            $weight = $_REQUEST['weight'];
        };
    ?>

    <h1 for="kmi">KMI masės indekso skaičiuoklė:</h1>
    <div class="content">
        <form>
            <label>Jūsų ūgis (metrais, pvz.: 1.68)*:</label>
                <?php
                if ($height == 0) {
                print('Neteisingas ūgis');
                } else
                print($height);
                ?>
            <label>Jūsų svoris (kilogramais, pvz.: 50)*:</label>
                <?php
                if ($weight == 0) {
                print('Neteisingas svoris');
                } else
                print($weight);
                ?>
        </form>
        <h2>Tavo KMI = <?php $kmi = $weight / ($height * $height); print(round($kmi, 2)) ?></h2>

    </div>

    <?php
        if ($kmi <= 18.5 && $kmi > 0) {
            header("refresh: 5 url=underweight.php");
            exit();
        } elseif ($kmi > 18.5 and $kmi <= 25) {
            header("refresh: 5 url=normal.php");
            exit();
        } elseif ($kmi > 25 and $kmi <= 30) {
            header("refresh: 5 url=overweight.php");
            exit();
        } elseif ($kmi > 30 ) {
            header("refresh: 5 url=obese.php");
            exit();
        }
    ?>

</body>
</html>