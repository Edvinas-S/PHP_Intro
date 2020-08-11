<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2020-08-06</title>
</head>
<body>
    <!-- 
        Su statiniais metodais ir savybėmis dirbant naudojame "scope resolution" operatorius.
        Jis atrodo: "::"
        Taigi, kai kviečiame: 
            objekto savybes ir metodus naudojame → (arrow operatorius).
            statines savybes ir metodus naudojame :: (scope resolution operatorius).
     -->
    <?php
        class CurrencyUtil {
            public static $s1 = "$";
            public $s2 = "€";
            
            public static function f1(){
                print($this->$s2 . "f1()");
            }
            
            public function f2(){
                print(self::$s1 . "f2()");
            }
        }
        $o = new CurrencyUtil();
        $o->f2();
        
        // PHP Notice:  Accessing static property CurrencyUtil::$s1 as non static ...
        echo PHP_EOL . $o->s1 . PHP_EOL;
        echo PHP_EOL . $o::$s1 . PHP_EOL;
        
        // print(PHP_EOL);
        // CurrencyUtil::f2();
        // print(PHP_EOL);
        // CurrencyUtil::f2();
        
        // PHP Fatal error:  Uncaught Error: Using $this when not in object context ...
        $o->f1();
        
        // SINGLETON
        class DbConnetion {
            private static $instance = null;
            private function __construct(){}

            public static function getInstance(){
                if (self::$instance == null){
                    print("Returning new object!" . PHP_EOL);
                    self::$instance = new DbConnetion();
                }
                return self::$instance;
            }
        }
    // Uncaught Error: Call to private DbConnetion::__construct()
    // $dbConn = new DbConnetion();
    $dbConn = DbConnetion::getInstance();
    $dbConn1 = DbConnetion::getInstance();
    $dbConn2 = DbConnetion::getInstance();
    
    echo '<br> dbConn: <br>';
    var_dump($dbConn);
    echo '<br> dbConn1: <br>';
    var_dump($dbConn1);
    echo '<br> dbConn2: <br>';
    var_dump($dbConn2);

    ?>
</body>
</html>