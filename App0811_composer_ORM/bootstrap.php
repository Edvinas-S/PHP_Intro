<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2020-08-11</title>
</head>
<body>
    <?php
        use Doctrine\ORM\Tools\Setup;
        use Doctrine\ORM\EntityManager;

        require_once "vendor/autoload.php";

        // Create a simple "default" Doctrine ORM configuration for Annotations
        $isDevMode = true;
        $proxyDir = null;
        $cache = null;
        $useSimpleAnnotationReader = false;
        $config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/src"), $isDevMode, $proxyDir, $cache, $useSimpleAnnotationReader);

        // database configuration parameters
        $conn = array(
            'driver'   => 'pdo_mysql',
            'host'     => '127.0.0.1',
            'dbname'   => 'my_orm_db',
            'user'     => 'root',
            'password' => 'mysql'
        );

        // obtaining the entity manager
        $entityManager = EntityManager::create($conn, $config);
    ?>
</body>
</html>