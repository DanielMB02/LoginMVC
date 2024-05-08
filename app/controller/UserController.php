<?php

require_once('../model/UserModel.php');

//Controls user login and registration

class UserController {
/**
 *  $param string $username user name
 *  $param string $password user's password
 */
    public function login($username, $password) {

        $model = new UserModel();
        $user = $model->login($username, $password);

        if ($user) {
            session_start();
            $_SESSION['user'] = $user;
            header("Location: ../view/welcome.php");
            exit();
        } 
        
        else {
            echo "USER NOT FOUND";
            header("refresh:1;url=../view/login.php");
        }

    }
/**
 *  $param string $username user name
 *  $param string $password user's password
 *  $param string $confirm_password user's password
 */
    public function register($username, $password, $confirm_password) {

        if ($password != $confirm_password) {
            echo "PASSWORDS DON'T MATCH";
            header("refresh:1;url=../view/register.php");
            exit();
        }

        $model = new UserModel();

        if ($model->register($username, $password)) {
            echo "Successfully registered user";
            header("refresh:1;url=../view/login.php");
        } 
        
        else {
            echo "ERROR REGISTERING USER";
        }

    }

}

session_start();

//Verifies if the action is login or register
if (isset($_POST['action'])) {

    require_once('UserController.php');
    $controller = new UserController();

    if ($_POST['action'] === 'login') {
        $controller->login($_POST['username'], $_POST['password']);
    } 
    
    elseif ($_POST['action'] === 'register') {
        $controller->register($_POST['username'], $_POST['password'], $_POST['confirm_password']);
    }

}
?>