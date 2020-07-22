<?php declare(strict_types=1);?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File browser</title>
    <style>
        table {
        width: 100vmin;
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        }
        table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        }
    </style>
</head>
<body>
    <?php
    $path = '../'.$_GET['my_way'];
    $files = scandir($path);
    print('<h2>You are in: '. $path .'</h2>');
    print('<button onclick="history.go(-1);">Simple BACK button</button>');
    print('<table>');
    print('<tr><th>File or Folder</th><th>Name</th><th>Action (for future)</th></tr>');
        // scan current directory and show files/folders
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
                print($file.'</td>');
                print((is_file($path . $file) ? '<td><button>Delete</button>'."\t".'<button>Rename</button>'."\t".'<button>Open</button></td>' : "<td> Don't touch :) </td>"));
            }       
            print('</tr>');
        }
    print('</table>');
    //back button
    print("\t".'<button><a href="');
        $back_fake = explode('/', $_SERVER['QUERY_STRING']);
        $back_real = explode('/', $_SERVER['QUERY_STRING'],-2);
        if (count($back_fake) == 1 || count($back_fake) == 2) {
            print('?my_way=/'.'">Normal BACK button</a>');
        } else
        print('?'.implode('/',$back_real).'/'.'"> Normal BACK button </a></button>');
    ?>

</body>
</html>