<?php declare(strict_types=1); ?>

<?php
    //connect to database
    $servername = "127.0.0.1";
    $username = "root";
    $password = "mysql";
    $dbname = "project_manager_db"; //need to comment $dbname first and remove it from $conn when creating DB
    
    $conn = mysqli_connect($servername, $username, $password, $dbname); // Create connection
    
    // // Check connection
    // if (!$conn) {
    //     die("Connection failed: " . mysqli_connect_error());
    // }
    // echo "Connected successfully <br>";

    // //****************************************************************************//
    // //  This is for adding Database, Table and putting some values to it (MySQL)  //
    // //****************************************************************************//
    //
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
    //     firstname VARCHAR(30) NOT NULL,
    //     course VARCHAR(30) NOT NULL
    //     )";
    
    // if (mysqli_query($conn, $sql)) {
    //     echo "Table WORKERS created successfully <br>";
    // } else {
    //     echo "Error creating table: " . mysqli_error($conn) . '<br>';
    // }

    // // sql to add values to workers
    // $sql = "INSERT INTO workers (`id`, `firstname`, `course`)
    //     VALUES 
    //         (1, 'Jonukas', 'Java'), (2, 'Gretute', 'PhP'), (3, 'Petriukas', 'HTML'),
    //         (4, 'Onutė', 'CSS'), (5, 'Mykoliukas', 'Python'), (6, 'Ugnelė', 'Php'),
    //         (7, 'Skirmantas', 'Java'), (8, 'Ramunė', 'CSS'), (9, 'Jonukas', 'Java'),
    //         (10, 'Gretute', 'PhP'), (11, 'Petriukas', ''), (12, 'Onutė', 'CSS'),
    //         (13, 'Mykoliukas', ''), (14, 'Ugnelė', ''), (15, 'Skirmantas', 'Java'),
    //         (16, 'Ramunė', '');
    //     ";
    // if (mysqli_query($conn, $sql)) {
    //     echo "Workeks added successfully <br>";
    // } else {
    //     echo "Error adding workers: " . mysqli_error($conn) . '<br>';
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

    // // sql to add values to courses
    // $sql = "INSERT INTO courses (`course_id`, `coursename`)
    //     VALUES 
    //          (1, 'Java'), (2, 'PhP'), (3, 'HTML'), (4, 'CSS'), (5, 'Python');
    //     ";
    // if (mysqli_query($conn, $sql)) {
    //     echo "Courses added successfully <br>";
    // } else {
    //     echo "Error adding courses: " . mysqli_error($conn) . '<br>';
    // }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Manager</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
    <header>
        <form action="index.php" method="post">
            <button type="submit">Darbuotojai</button>
        </form>
        <form action="project.php" method="post">
            <button type="submit">Projektai</button>
        </form>
        <div class="name">Projekto valdymas</div>
    </header>
    <main>
        <table>
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Assign to course</th>
                <th>Action (for future use)</th>
            </tr>
            <?php
            // Print to HTML WORKERS
            $sql = "SELECT id, firstname, course FROM workers";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>
                    <td>". $row["id"] ."</td><td>". $row["firstname"] ."</td><td>". $row['course'] ."</td><td> For future use </td>
                        </tr>";
                }
            } else {
                echo "<tr>
                <td> 0 </td><td> 0 </td><td> 0 </td><td> 0 </td>
                    </tr>";
            }
            ?>
        </table>
    </main>
    <footer>
       This is for education. 
       <p>My GitHub <a class="fa fa-github" href="https://github.com/Edvinas-S" target="_blank" rel="noopener noreferrer"></a></p>
    </footer>

    <?php mysqli_close($conn) ?>
    
</body>
</html>