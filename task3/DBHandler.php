<?php

/* Credit: Bjarte Klyve Larsen, 16HBPROGA */

class Database {
    private static $connection = false;
    public static function instance() {
        global $config;
        if(!self::$connection) {
            self::$connection = new PDO('mysql:host=127.0.0.1;dbname=DBOblig5;charset=utf8mb4', 'root', '');
        }
        return self::$connection;
    }
}
