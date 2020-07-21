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
    $path = '../';
    $files = scandir($path);
    print('<h2>You are in: '. $_SERVER['REQUEST_URI'] .'</h2>');
    print('<table>');
    print('<tr><th>File or Folder</th><th>Name</th><th>Action (for future)</th></tr>');
        foreach ($files as $file) {
            print('<tr>');
            if ($file != '.' && $file != '..') {
                print('<td>'. (is_dir($path . $file) ? 'Folder' : 'File') .'</td>');
                print('<td>'. (is_dir($path . $file) ? '<a href="'.$path.$file.'">'.$file.'</a>' : $file) .'</td>');
                print((is_file($path . $file) ? '<td><button>Delete</button>'."\t".'<button>Rename</button>'."\t".'<button>Open</button></td>' : "<td> Don't touch :) </td>"));
            }
            print('</tr>');
        }
    print('</table>')
    ?>

</body>
</html>