<?php
    //connect to database
    $servername = "127.0.0.1";
    $username = "root";
    $password = "mysql";
    $dbname = "test"; //need to comment $dbname first and remove it from $conn when creating DB
    
    $conn = mysqli_connect($servername, $username, $password, $dbname); // Create connection

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully <br>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2020-08-03</title>
</head>
<body>

    <?php
    // // create new table "bandymas"
    //     $sql = "CREATE TABLE bandymas (
    //         id INT PRIMARY KEY,
    //         name VARCHAR(255),
    //         surname VARCHAR(255),
    //         salary INT
    //         );";
    //     mysqli_query($conn, $sql);
    
    // // writing new values to table "bandymas"
    //     $sql = "INSERT INTO bandymas (`id`, `name`, `surname`, `salary`)
    //             VALUES 
    //             (1, 'Mindaugas', 'Bern', 500),
    //             (2, 'Jonas', 'Kur', 1500),
    //             (3, 'Petras', 'Per', 500),
    //             (4, 'Juozas', 'Ten', 100);";
    //     mysqli_query($conn, $sql);

    // // another way to write into table if you want all values to be written
    //     $sql = "INSERT INTO bandymas VALUES (5, 'Pranas', 'Bal', 500);";
    //     mysqli_query($conn, $sql);
    
    // // change existing data
    // //*********************************************************************************************************************//
    // //  You need to disable MySql "Safe Updates Preference" to modify tables if you use not `id` (primary key) for update  //
    // //*********************************************************************************************************************//
    //      $sql = 'SET SQL_SAFE_UPDATES = 0;';
    //      mysqli_query($conn, $sql);              // after that you need to restart MySql
    //
    //         $sql = "UPDATE bandymas
    //                 SET
    //                 `id` = 0,
    //                 `name` = 'Tavo',
    //                 `surname` = 'Vardas',
    //                 `salary` = 999
    //                 WHERE `id` = 1;";
    //         mysqli_query($conn, $sql);

    // // delete from table
    //      $sql = "DELETE FROM bandymas WHERE `name` = 'Tavo';";
    //      mysqli_query($conn, $sql);

    // // STORE a procedure (it's like to create a function in PhP) this one is done in MySQL
    // delimiter ##
    //     CREATE PROCEDURE get_salary_by_surname(IN insurname VARCHAR(255))
    //     BEGIN 
    //     SELECT * FROM bandymas
    //     WHERE surname LIKE insurname;
    //     END##
    // delimiter ;

    // // call the "function"
    // CALL get_salary_by_surname('%e%');

    // // remove from stored procedures
    // DROP PROCEDURE get_salary_by_name;

    //==============================================//
    // FOREIGN KEY constraint example               //
    // =============================================//
    //     ALTER TABLE <table>
    //     ADD CONSTRAINT FOREIGN KEY
    //     [name] (col_name, ...)
    //     REFERENCES tbl_name (col_name,...)
    //     [ON DELETE reference_option]
    //     [ON UPDATE reference_option]

    // reference_options:
    // 	   RESTRICT (default) → if a row in parent has matching row in child, reject deleting or updating rows in parent table.
    //     CASCADE → if row from parent deleted or updated, matching rows in child automatically deleted or updated.
    //     SET NULL → if row from parent deleted or updated, matching rows in child are set to NULL.
    //     NO ACTION → is the same as RESTRICT.
    //     SET DEFAULT → is recognized by the MySQL parser. However, this action is rejected by both InnoDB and NDB tables.

    ?>

    <?php 
        $sql = 'SELECT * FROM bandymas';
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<br> id='.$row['id'].'<br> Vardas='.$row['name'].'<br> Pavardė='.$row['surname'].'<br> Atlyginimas='.$row['salary'].';';
            }
        }
        else {
            echo 'Doup';
        }
    ?>

</body>
</html>