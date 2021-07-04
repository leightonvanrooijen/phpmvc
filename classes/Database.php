<?php

class Database
{
    public static string $host = '127.0.0.1:3307';
    public static string $dbName = 'phpmvc';
    public static string $userName = 'leighton';
    public static string $password = '123456';

    private static function connect(): PDO
    {
        $db = new PDO('mysql:host=' . self::$host .';dbname=' . self::$dbName, self::$userName, self::$password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $db;
    }

    public static function query($query, $params = []): array
    {
        $statement = self::connect()->prepare($query);
        $statement->execute($params);

        if(explode(' ', $query)[0] == 'SELECT') {
            return $statement->fetchAll();
        }
    }
}
