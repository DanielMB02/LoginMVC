<?php
require_once('../../core/connection.php');

class UserModel {

    //function for verify user login
/**
 *  $param string $username user name
 *  $param string $password user's password
 */
    public function login($username, $password) {
        global $connection;
        $sql = "SELECT * FROM users WHERE username=:username AND password=:password";
        $stmt = $connection->prepare($sql);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    //function for verify user registration
/**
 *  $param string $username user name
 *  $param string $password user's password
 */
    public function register($username, $password) {
        global $connection;
        $sql = "INSERT INTO users (username, password) VALUES (:username, :password)";
        $stmt = $connection->prepare($sql);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        return $stmt->execute();
    }

}
?>