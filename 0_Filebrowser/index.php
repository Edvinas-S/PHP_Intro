<?php declare(strict_types=1);?>

<?php //login logic
    session_start();
    $mesage = '';
    if (isset($_POST['login']) && !empty($_POST['username']) && !empty($_POST['password'])) {	
        if ($_POST['username'] == 'Edvinas' && $_POST['password'] == 'qwer1234') {
            $_SESSION['logged_in'] = true;
            $_SESSION['username'] = 'Edvinas';
        } else {
            $mesage = 'Wrong username or password';
        }
    }

    //logout logic
    if(isset($_POST['logout'])) {
        session_start();
        unset($_SESSION['username']);
        unset($_SESSION['password']);
        unset($_SESSION['logged_in']);
        print('Logged out!');
    }

    //new directory creation logic
    if (isset($_GET['new_dir'])) {
        if ($_GET['new_dir'] != '') {
            $new_dir = './' .$_GET['my_way'] . $_GET['new_dir'];
            mkdir($new_dir, 0777, true);
            $refresh_start = explode('%2F', $_SERVER['QUERY_STRING'],-1);
            $refresh_last = '?' . implode('/',$refresh_start).'/';
            header('Location: ' . $refresh_last);
        } // NOT WORKING IN PARENT DIRECTORY
            $refresh_start = explode('%2F', $_SERVER['QUERY_STRING'],-1); 
            $refresh_last = '?' . implode('/',$refresh_start).'/';
            header('Location: ' . $refresh_last);
    }

    //file deletion logic
    if(isset($_POST['deletion'])){
        $file_del = './' .$_GET["my_way"] . $_POST['deletion']; 
        $file_delete = str_replace("&nbsp;", " ", htmlentities($file_del, ENT_QUOTES, 'utf-8'));
        if(is_file($file_delete)){
            unlink($file_delete);
            header('Refresh:0');
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File browser</title>
    <style>
        table {
        width: 100%;
        }
        table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        }
    </style>
</head>
<body>
    <?php //login form
    if(!$_SESSION['logged_in'] == true){
        print('<form action = "" method = "post">');
        print('<h4>' . $mesage . '</h4>');
        print('<input type = "text" name = "username" placeholder = "username = Edvinas" required></br>');
        print('<input type = "password" name = "password" placeholder = "password = qwer1234" required><br>');
        print('<button type = "submit" name = "login">Login</button>');
        print('</form>');
        die();
    }

    $path = './'.$_GET['my_way'];
    $files = scandir($path);
    print('<h2>You are in: '. $path .'</h2>');
    print('<button onclick="history.go(-1);">Simple BACK button</button>'); //simple "back" button
    echo '<br>';
    echo '<br>';
    print('<table>');
    print('<tr><th>File or Folder</th><th>Name</th><th>Action (for future)</th></tr>');

        // main structure - scan current directory and show files/folders
        foreach ($files as $file) {
            print('<tr>');
            if ($file != '.' && $file != '..') {
                print('<td>'. (is_dir($path . $file) ? 'Folder' : 'File') .'</td>');
                print('<td>');
                if (is_dir($path . $file) == 'true') {
                    print('<a href="');
                    if (isset($_GET['my_way']) == 'true') {
                        print($_SERVER['REQUEST_URI'] . $file . '/'. '">' . $file . '</a>');
                    } else print($_SERVER['REQUEST_URI'] . '?my_way=/' . $file . '/'. '">' . $file . '</a>');
                } else 
                print($file.'</td>'); //delete file button
                print((is_file($path . $file) ? 
                    '<td><form method="post"><input type="hidden" name="deletion" value=' .str_replace(' ', '&nbsp;', $file).'><input type="submit" value="Delete"></form></td>' 
                    : "<td> Don't touch :) </td>"));
            }       
            print('</tr>');
        }
    print('</table>');
    echo '<br>';

    //back button
    print("\t".'<button><a href="');
        $back_fake = explode('/', $_SERVER['QUERY_STRING']);
        $back_real = explode('/', $_SERVER['QUERY_STRING'],-2);
        if (count($back_fake) == 1 || count($back_fake) == 2) {
            print('?my_way=/'.'">Normal BACK button</a>');
        } else
        print('?'.implode('/',$back_real).'/'.'"> Normal BACK button </a>');
        print('</button><br><br>')
    ?>

    <!-- new directory -->
    <form action="/0_Filebrowser" method="get"> 
        <input type="hidden" name="my_way" value="<?php print($_GET['my_way']) ?>" /> 
        <input placeholder="New folder name" type="text" name="new_dir">
        <button type="submit">Create</button>
    </form>


    <? // ERROR catching
        // print(getcwd());
        // echo '<br>';
        // var_dump($_SESSION['logged_in']);
        // echo '<br>';
        // var_dump($refresh_last);
        // echo '<br>';
        // var_dump($new_dir);
        // echo '<br>';
        // var_dump($_GET['new_dir']);
        // echo '<br>';
        // var_dump($_GET['my_way']);
        // echo '<br>';
        // var_dump($_SERVER['REQUEST_URI']);
        // echo '<br>';
        // var_dump($_SERVER['QUERY_STRING']);
    ?>
    
    <!-- logout button -->
    <br>
     <form action="index.php" method="post"> 
        <input type="hidden" name="logout">
        <button type="submit">Logout!</button>
    </form>

</body>
</html>