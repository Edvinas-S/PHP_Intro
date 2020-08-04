<?php
    //connect to database
    $servername = "127.0.0.1";
    $username = "root";
    $password = "mysql";
    $dbname = "project_manager_db";
    
    $conn = mysqli_connect($servername, $username, $password, $dbname);

// DELETE person from workers table
function delete_person() {
    global $conn;
    $sql = 'DELETE FROM workers WHERE `id`= '.$_POST['person_id'].';';
    mysqli_query($conn, $sql);
}
if(isset($_POST['delete_person'])) {
    delete_person();
    header('Location: index.php');
}

// DELETE project from course table
function delete_course() {
    global $conn;
    $sql = "DELETE FROM courses WHERE coursename = "."'".$_POST['course_name']."'".";";
    mysqli_query($conn, $sql);
}
if(isset($_POST['delete_course'])) {
    delete_course();
    header('Location: project.php');
}

// UPDATE person name from workers table 
function update_name() {
    global $conn; //      ".$_POST['person_form_id']."
    $sql = "UPDATE workers SET `firstname` ="."'".$_POST['new_name']."'"." WHERE `id`=".$_POST['person_id'].";";
    mysqli_query($conn, $sql);
}
if(isset($_POST['update_name'])) {
    update_name();
    header('Location: index.php');
}
?>