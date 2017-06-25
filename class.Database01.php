<?php

include 'configs/DatabaseCredential01.php';

/**
 * db connection class using singleton pattern
 */
class Database01 {

    //variable to hold connection object.
    protected static $db = NULL;

    /**
     * get connection function. Static method - accessible without instantiation
     */
    public static function getConnection() { 
        //Guarantees single instance, if no connection object exists then create one.
        if (!self::$db) {
            //new connection object.
            new self();
        }
        //return connection.
        return self::$db;
    }
    private function __construct() {
        global $dsn,$username,$password;
        try {
        // assign PDO object to db variable
            self::$db = new PDO($dsn, $username, $password);
            self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            //Output error - would normally log this to error file rather than output to user.
            echo "Connection Error: " . $e->getMessage();
        }
    }

    private function __clone() {}

}

//class Database01 extends mysqli {
//
//    protected static $instance;
//    protected static $options = array();
//    private function __construct() {
//        $o = self::$options;
//        parent::__construct(
//                $o['host'], $o['user'], $o['pass'], $o['dbname'], 
//                isset($o['port']) ? $o['port'] : 3306, 
//                isset($o['sock']) ? $o['sock'] : false );
//        // check if a connection established
//        if (mysqli_connect_errno()) {
//            throw new exception("Could not establish a Database connection ");
//        }
//    }
//    private function __clone() {}
//
//    public static function getConnection() {
//        global $hostName,$username,$password,$databaseName;
//        if (!self::$instance) {
//            self::$options = ['host' => $hostName,
//                                'user' => $username,
//                                'pass' => $password ,
//                                'dbname' => $databaseName];
//            self::$instance = new self();
//        }
//        return self::$instance;
//    }
//
//}
