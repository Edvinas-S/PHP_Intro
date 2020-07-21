<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2020-07-21</title>
</head>
<body>
    <?php 
        session_start(); 

        // logout logic
        if(isset($_GET['action']) and $_GET['action'] == 'logout'){
            session_start();
            unset($_SESSION['username']);
            unset($_SESSION['password']);
            unset($_SESSION['logged_in']);
            print('Logged out!');
        }
    ?>
    <h2>Enter Username and Password</h2> 
    <div>
        <?php
            $msg = '';
            if (isset($_POST['login']) 
                && !empty($_POST['username']) 
                && !empty($_POST['password'])
            ) {	
               if ($_POST['username'] == 'Edvinas' && 
                  $_POST['password'] == '01'
                ) {
                  $_SESSION['logged_in'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = 'Edvinas';
                  echo 'You have entered valid use name and password';
               } else {
                  $msg = 'Wrong username or password';
               }
            }
        ?>
    </div>
    <?php 
        if($_SESSION['logged_in'] == true){
            print('<h1>You can only see this if you are logged in!</h1>');
        }
    ?>
    <form action = "" method = "post">
        <h4><?php echo $msg; ?></h4>
        <input type = "text" name = "username" placeholder = "username = Edvinas" required autofocus></br>
        <input type = "password" name = "password" placeholder = "password = 01" required>
        <button type = "submit" name = "login">Login</button>
    </form>
        Click here to <a href = "index.php?action=logout"> logout.
    </div> 
</body>
</html>
