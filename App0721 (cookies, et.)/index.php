<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2020-07-21</title>
</head>
<body>
    <?php
        setcookie("name", "Mindaugas", time()+3600, "/","", 0);
        setcookie("age", "12", time()+3600, "/", "",  0);
    ?>

    <?php echo "Set Cookies"?>
    
</body>
</html>