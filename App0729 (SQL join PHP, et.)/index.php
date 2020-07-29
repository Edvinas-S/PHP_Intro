<?php declare(strict_types=1);?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2020-07-29</title>
</head>
<body>
    2020-07-29d.
</body>
</html>


<!-- MySQLi -->
<?php //connect to database
    $servername = "127.0.0.1";
    $username = "root";
    $password = "mysql";
    $dbname = "myDB";
    
    $conn = mysqli_connect($servername, $username, $password, $dbname); // Create connection
    
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";

    // Create database
    $sql = "CREATE DATABASE myDB";
    if (mysqli_query($conn, $sql)) {
        echo "Database created successfully";
    } else {
        echo "Error creating database: " . mysqli_error($conn);
    }

    // sql to create table
    $sql = "CREATE TABLE MyGuests (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

    if (mysqli_query($conn, $sql)) {
        echo "Table MyGuests created successfully";
    } else {
        echo "Error creating table: " . mysqli_error($conn);
    }

    // Select
    $sql = "SELECT id, firstname, lastname FROM MyGuests";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
        }
    } else {
        echo "0 results";
    }

    // Prepared statement
    $stmt = $conn->prepare("SELECT id, name FROM customer WHERE name LIKE ?");
    $stmt->bind_param("s", $a = "%%");
    $stmt->execute();
    $stmt->bind_result($id, $name);
    $stmt -> fetch();

    while ($stmt->fetch()){
        echo "<pre>";
        echo "id: $id\n";
        echo "name: $name\n";
        echo "</pre>";
    }
    $stmt->close();

    mysqli_close($conn);
?>
<!-- PDO -->
<?php
    // $servername = "localhost";
    // $username = "root";
    // $password = "mysql";

    // try {
    //     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    //     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //     $stmt = $conn->prepare("SELECT id, firstname, lastname FROM MyGuests");
    //     $stmt->execute();
    
    //     // set the resulting array to associative
    //     $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    //     foreach(new RecursiveArrayIterator($stmt->fetchAll()) as $k=>$v) {
    //         echo $v;
    //     }
    // }
    // catch(PDOException $e) {
    //     echo "Error: " . $e->getMessage();
    // }
    // $conn = null;   
?>
