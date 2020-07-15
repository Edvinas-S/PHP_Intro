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
        <p>Į lentelę įveskite duomenis</p>
        <form action="/App2/index.php" method="POST">
            <label>Jūsų ūgis (metrais, pvz.: 1.68)*:</label><input type="text" name="height"><br>
            <label>Jūsų svoris (kilogramais, pvz.: 50)*:</label><input type="text" name="weight"><br>
            <input type="submit" value="Skaičiuoti" style="cursor: pointer; margin-left: 150px; margin-top: 10px; color: #FFF; background-color: #137AB2; border: none; border-radius: 5px; padding-top: 5px; padding-bottom: 5px">
        </form>
    </div>

    <?php
    if (empty($height)); 
    print('<h3 style="color: red">Įveskite ūgį</h3>');
    if (empty($weight)); 
    print('<h3 style="color: red">Įveskite svorį</h3>');
    if ($weight != 'NULL' or $height != 'NULL') {
        $kmi = $weight / ($height * $height);
    }
    ?>

    <?php
    if ($kmi <= 18.5) {
        header("Location: underweight.php");
        exit();
    } elseif ($kmi > 18.5 and $kmi <= 25) {
        header("Location: normal.php");
        exit();
    } elseif ($kmi > 25 and $kmi <= 30) {
        header("Location: overweight.php");
        exit();
    } elseif ($kmi > 30 ) {
        header("Location: obese.php");
        exit();
    }
    ?>

</body>
</html>