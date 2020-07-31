<?php declare(strict_types=1); ?>

<?php
    //connect to database
    $servername = "127.0.0.1";
    $username = "root";
    $password = "mysql";
    $dbname = "project_manager_db";
    
    $conn = mysqli_connect($servername, $username, $password, $dbname); // Create connection
    
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully <br>";

    // // Create database
    // $sql = "CREATE DATABASE project_manager_db";
    // if (mysqli_query($conn, $sql)) {
    //     echo "Database created successfully <br>";
    // } else {
    //     echo "Error creating database: " . mysqli_error($conn) . '<br>';
    // }

    // // sql to create table WORKERS
    // $sql = "CREATE TABLE workers (
    //     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    //     firstname VARCHAR(30) NOT NULL
    //     )";
    
    // if (mysqli_query($conn, $sql)) {
    //     echo "Table WORKERS created successfully <br>";
    // } else {
    //     echo "Error creating table: " . mysqli_error($conn) . '<br>';
    // }

    // // sql to create table COURSES
    // $sql = "CREATE TABLE courses (
    //     course_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    //     coursename VARCHAR(30) NOT NULL
    //     )";
    
    // if (mysqli_query($conn, $sql)) {
    //     echo "Table COURSES created successfully <br>";
    // } else {
    //     echo "Error creating table: " . mysqli_error($conn) . '<br>';
    // }

    // // sql to add values to workers
    // $sql = "INSERT INTO workers (`id`, `firstname`)
    //     VALUES 
    //         (1, 'Jonukas'),
    //         (2, 'Gretute');
    //     ";
    // if (mysqli_query($conn, $sql)) {
    //     echo "Workeks added successfully <br>";
    // } else {
    //     echo "Error adding workers: " . mysqli_error($conn) . '<br>';
    // }

    // // sql to add values to courses
    // $sql = "INSERT INTO courses (`course_id`, `coursename`)
    //     VALUES 
    //          (1, 'Java'),
    //          (2, 'PhP');
    //     ";
    // if (mysqli_query($conn, $sql)) {
    //     echo "Courses added successfully <br>";
    // } else {
    //     echo "Error adding courses: " . mysqli_error($conn) . '<br>';
    // }

    // Select and print to HTML WORKERS
    $sql = "SELECT id, firstname FROM workers";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. "<br>";
        }
    } else {
        echo "0 results";
    }

    // Select and print to HTML COURSES
    $sql = "SELECT course_id, coursename FROM courses";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo "course_id: " . $row["course_id"]. " - Course name: " . $row["coursename"]. "<br>";
        }
    } else {
        echo "0 results";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Manager</title>
</head>
<body>
    
<?php


?>

</body>
</html>