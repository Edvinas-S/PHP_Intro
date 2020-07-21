<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KMI skaiciuokle</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>

    <h1 for="kmi">KMI masės indekso skaičiuoklė:</h1>
    <div class="content">
        <p>Į lentelę įveskite duomenis</p>
        <form action="/App0714 (globals, et.)/calculated.php" method="POST" >
            <label>Jūsų ūgis (metrais, pvz.: 1.68)*:</label><input type="text" name="height"><br>
            <label>Jūsų svoris (kilogramais, pvz.: 50)*:</label><input type="text" name="weight"><br>
            <input type="submit" name="submit" value="Skaičiuoti" style="cursor: pointer; margin-left: 150px; margin-top: 10px; color: #FFF; background-color: #137AB2; border: none; border-radius: 5px; padding-top: 5px; padding-bottom: 5px">
        </form>
    </div>

</body>
</html>