<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2020-08-18</title>
</head>
<body>
    <?php
        // API - application programming interface
        // REST - representational state transfer is a software architectural style that defines a set of constraints to be used for creating Web services.

        class Author{
            private $id;
            private $name;
            private $surname;
            public function __construct($id, $name, $surname){
                $this->id = $id;
                $this->name = $name;
                $this->surname = $surname;
            }
            public function getId(){ return $this->id; }
            public function setId($id){ $this->id = $id; }
            public function getName(){ return $this->name; }
            public function setName($name){ $this->name = $name;}
            public function getSurname(){ return $this->surname; }
            public function setSurname($surname){ $this->surname = $surname;}
        }

        class Book {
            private $isbn;  
            private $title;
            private $authors = [];
            public function __construct($isbn, $title, $authors){
                $this->isbn = $isbn;
                $this->title = $title;
                $this->authors = $authors;
            }
            public function getIsbn(){ return $this->isbn; }
            public function setIsbn($isbn){ $this->isbn = $isbn; }
            public function getTitle(){ return $this->title; }
            public function setTitle($title){ $this->title = $title;}
            public function getAuthors(){ return $this->title; }
            public function setAuthors($authors){ $this->authors = $authors;}
        }

        switch($_SERVER['REQUEST_METHOD']){
            case 'POST': print("POST"); break;
            case 'GET': print("GET"); break;
            case 'PUT': print("PUT"); break;
            case 'DELETE': print("DELETE"); break;
            default: die("HTTP verb unknown!");
        }

        // Read JSON file
        $FILE = 'authors.json';
        $json_file = file_get_contents($FILE);
        $authors_arr = json_decode($json_file, true);

        // create authors from file
        $authors = [];
        foreach($authors_arr as $author)
            array_push($authors, new Author(
                $author['id'], 
                $author['name'],
                $author['surname']
            ));

        // read all with cURL
        switch($_SERVER['REQUEST_METHOD']){
            case 'POST': print("POST"); break;
            case 'GET': 
                // get all authors
                if($_SERVER['REQUEST_URI'] === "/RestApiPhp/author"){
                    print_r($authors);
                } elseif (substr($_SERVER['REQUEST_URI'], 0, strlen("/RestApiPhp/author/")) === "/RestApiPhp/author/"){
                    $id = end(explode('/', $_SERVER['REQUEST_URI']));
                    foreach($authors as $author){
                        if($author->getId() == $id)
                            print_r($author);
                    }
                }
                // print($_SERVER['REQUEST_URI']);
                break;
            case 'PUT': print("PUT"); break;
            case 'DELETE': print("DELETE"); break;
            default: die("HTTP verb unknown!");
        }

        // logic write to json
        switch($_SERVER['REQUEST_METHOD']){
            case 'POST': 
                if($_SERVER['REQUEST_URI'] === "/RestApiPhp/authors"){
                    $inputJSON = file_get_contents('php://input');
                    $x = json_decode($inputJSON, true);
                    array_push($authors, new Author($x['id'], $x['name'],$x['surname']));
                    $people_arr = json_encode($authors);
                    file_put_contents($FILE, $people_arr);
                }
            break;
        }


    ?>
</body>
</html>