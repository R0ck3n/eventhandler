<?php

class Db {
    private static Db $instance;
    private PDO $connection;

    private function __construct()
    {
        try {
            $this->connection = new PDO(
                'mysql:host=localhost;dbname=test_php;charset=utf8',
                'root',
                '',
                [
                    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::ATTR_EMULATE_PREPARES   => false,
                ],
            );
        } catch (Exception $e) {
            exit("Connection failed : {$e->getMessage()}");
        }
    }

    public static function getInstance(): Db
    {
        if (!isset(self::$instance)) {
            self::$instance = new Db();
        }

        return self::$instance;
    }

    public function getConnection(): PDO
    {
        return $this->connection;
    }
}