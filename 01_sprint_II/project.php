<?php
    $servername = "127.0.0.1";
    $username = "root";
    $password = "mysql";
    $dbname = "project_manager_db";
    
    $conn = mysqli_connect($servername, $username, $password, $dbname);
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
                <th>Course title</th>
                <th>Persons assigned to this course</th>
                <th>Action (for future use)</th>
            </tr>
            <?php
            // Print to HTML COURSES
            $sql = "SELECT DISTINCT coursename, firstname FROM courses
                    LEFT JOIN workers
                    ON courses.coursename = workers.course
                    ;";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>
                    <td>". $row["coursename"] ."</td><td>". $row['firstname'] ."</td><td> For future use </td>
                        </tr>";
                }
            } else {
                echo "<tr>
                <td> 0 </td><td> 0 </td><td> 0 </td>
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