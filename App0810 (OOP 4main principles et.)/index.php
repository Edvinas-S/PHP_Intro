<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2020-08-10</title>
</head>
<body>
    <?php
//=======================================================================================
        // // 1. Encapsulation - Wrapping some data in single unit;

        // // compare design of these class 1/2
        // class Person {
        //     public $firstname = "Mindaugas"; 
        //    }

        // // compare design of these class 2/2
        // class Person {
        //     private $firstname;
        //     public function __construct($fn, $ln){
        //         $this->firstname = $fn;
        //     }
        //     public function getFirstname(){
        //         return $this->firstname;    
        //     }
        // }

        // public function setFirstname($fn) {		    
        //     // su setteriu galime užtikrinti duomenų validumą
		//     // ... ar netuščias stringas
		//     // ... ar stringas nėra kažkoks neleistinas
		//     $this->firstname = $fn;    
		// }

//=======================================================================================
        // // 2. Inheritance - class derives from another class;

        // class Person {
        //     private $firstname; 
        //     private $lastname;
            
        //     public function __construct($fn, $ln){
        //         $this->firstname = $fn;
        //         $this->lastname = $ln;
        //     }
            
        //     public function getFirstname(){
        //         return $this->firstname;    
        //     }
            
        //     public function getLastname(){
        //         return $this->lastname;    
        //     }
        // }
           
        // class Employee extends Person {}
              
        // $p1 = new Employee("Edvinas", "Pavardenis");
        // echo $p1->getFirstname();

        // class Employee extends Person {
        //     private $badgeId;
        //     public function __construct($fn, $ln, $bi){
        //         parent::__construct($fn, $ln); // super();
        //         // $this->firstname = $fn;
        //         // $this->lastname = $ln;
        //       $this->badgeId = $bi;
        //     }
        //     public function getBadgeId(){
        //         return $this->badgeId;
        //     }
        // }

        // $p1 = new Employee("Edvinas", "Pavardenis", "0123456");
        // echo $p1->getFirstname() . PHP_EOL; //EOL - "end of line" (new line);
        // echo $p1->getBadgeId() . PHP_EOL;
        
        // // ERROR:
        // $p1 = new Person("Edvinas", "Pavardenis", "0123456");
        // echo $p1->getFirstname() . PHP_EOL;
        // echo $p1->getBadgeId() . PHP_EOL; // Uncaught Error: Call to undefined method Person::getBadgeId()

//=======================================================================================
        // // 3. Polymorphism - allows multiple class with various functionalities to implement or share a common Interface.

        // class Person {
        //     private $firstname; 
        //     private $lastname;
            
        //     public function __construct($fn, $ln){
        //         $this->firstname = $fn;
        //         $this->lastname = $ln;
        //     }
            
        //     public function getFirstname(){
        //         return $this->firstname;    
        //     }
            
        //     public function getLastname(){
        //         return $this->lastname;    
        //     }
        //    }
           
        // class Employee extends Person {
        //     function someFun(){ print("ABC"); }
        // }

        // $people = array(
        //     new Employee("Edvinas", "Pavardenis"),
        //     new Person("Jonas", "Jonaitis"),
        //     new Person("Petras", "Petraitis")
        // );
    
        // foreach($people as $person){
        //     print($person->getFirstname() . ' ' . $person->getLastname() . "\n");
        //     // Uncaught Error: Call to undefined method Person::someFun()
        //     // print($person->getFirstname() . ' ' . $person->getLastname() . ' ' .  $person->someFun() . "\n");
        // }

        // class X {
        //     function getFirstname(){
        // echo ">>>"; 
        //     }
        // } 

        // $x = new X();
        
        // print("-----------------" . PHP_EOL);
        // function poly(Person $p){
        //     print($p->getFirstname() . PHP_EOL);
        // }
        
        // poly($people[0]); // Employee
        // poly($people[1]); // Person
        // poly($x); // X Uncaught TypeError: Argument 1 passed to poly() must be an instance of Person, instance of X given
        // print("-----------------" . PHP_EOL);
    
//=======================================================================================
        // // 4. Composition - mechanism to reuse code across classes by containing instances of other classes that implement the desired functionality.

        // class Car {
        //     private $engine;
            
        //     // depency injection : constructor injection
        //     function __construct(Engine $e){
        //         $this->engine = $e;
        //     }
        //     // setter injection
        //     function setEngine(Engine $e){
        //         $this->engine = $e;
        //     }
        // }

        // class Engine {
        //     function __construct(){
        //         print("Engine is ON!");
        //     }
        // }
        
        // $car = new Car(new Engine());
        // $engine = new Engine();
        // $car = new Car($engine); //Uncaught TypeError: Argument 1 passed to Car::__construct() must be an instance of Engine, null given
        

    ?>  
</body>
</html>