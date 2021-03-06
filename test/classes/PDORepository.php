<?php
/**
 * Created by IntelliJ IDEA.
 * User: bonna
 * Date: 09/02/2018
 * Time: 08:26
 */
abstract class PDORepository{
    const USERNAME="root";
    const PASSWORD="";
    const HOST="localhost";
    const DB="test";

    private function getConnection(){
        $username = self::USERNAME;
        $password = self::PASSWORD;
        $host = self::HOST;
        $db = self::DB;
        $connection = new PDO("mysql:dbname=$db;host=$host", $username, $password);
        return $connection;
    }

    /**
     * @param $sql
     * @param $args
     * @return PDOStatement
     */
    protected function queryList($sql, $args){
        $connection = $this->getConnection();
        $stmt = $connection->prepare($sql);
        $stmt->execute($args);
        return $stmt;
    }
}

?>