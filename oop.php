<?php
    class BaseClass{
        public $str;
        function __construct($string){
            $this->str = $string;
            print "Constructor ".__CLASS__."<br>";
        }
        function __toString(){
            return $this->str;
        }
    }

    class SubClass extends BaseClass{
        function __construct($string){
            parent::__construct($string);
            print "Constructor ".__CLASS__."<br>";
        }
    }

    class Singleton{
        protected static $instance = null;

        protected function __construct(){}

        protected function __clone(){}

        public static function getInstance(){
            if (!isset(static::$instance)) {
                static::$instance = new static;
            }
            return static::$instance;
        }

        public $value = 0;
    }

    $arr = [
        new BaseClass('Hello'),
        new SubClass('World!'),
    ];

    print '<br>'.implode(' ', $arr).'<br><br>';

    $s1 = Singleton::getInstance();
    $s2 = Singleton::getInstance();
    $s1->value = 1;
    print $s2->value.'<br>';
    if($s1==$s2){
        print "True<br>";
    }else{
        print "False<br>";
    }
    $s3 = $s1;
    if($s2==$s3){
        print "True<br>";
    }else{
        print "False<br>";
    }
?>

<a href="site/index.php"><br>Site</a>
