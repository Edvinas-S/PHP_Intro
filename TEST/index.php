<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2020-08-05</title>
</head>
<body>
    
<?php
    class Person {
        function __construct($firstname = "Mindaugas", $lastname = "Ber.", $age = 40){
                $this->firstname = $firstname; 
                $this->lastname = $lastname;
                $this->age = $age;
        }
        
        function getFirstname(){
                return $this->firstname;
        }
        
        function setFirstname($firstname){
                $this->firstname = $firstname;
        }
        
        function getLastname(){
                return $this->lastname;
        }
        
        function setLastname($lastname){
                $this->lastname = $lastname;
        }

        function getAge(){
                return $this->age;
        }

        function setAge($age){
                $this->age = $age;
        }
    }

    $people = array(
        new Person("Jonas", "Jonaitis", 35),
        new Person("Petras", "Petraitis", 30),
        new Person("Antanas", "Antanaitis", 40)
        );

    foreach($people as $person){
        print($person->getFirstname() . ' ' . $person->getLastname() .' '. $person->getAge() . "\n");
    }

    function compare_age($item1, $item2) {
        return $item1->getAge() - $item2->getAge();
    }

    usort($people, 'compare_age');


    echo '<br>';
    foreach($people as $person){
        print($person->getFirstname() . ' ' . $person->getLastname() .' '. $person->getAge() . "\n");
    }
?>

</body>
</html>