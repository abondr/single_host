<?php

include '../configs/DatabaseCredential01.php';

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
            $default_options = [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        ];
        // assign PDO object to db variable
            
            self::$db = new PDO($dsn, USER_NAME, PASSWORD,$default_options);
           // self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            //Output error - would normally log this to error file rather than output to user.
            echo "Connection Error: " . $e->getMessage();
        }
    }

    private function __clone() {}

}
