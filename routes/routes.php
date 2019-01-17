<?php

require_once("../model/Membro.class.php");
session_start();

if(isset($_POST['loginAttempt'])){
    $username = $_POST['uname'];
    $password = $_POST['psw'];
    unset($_POST['loginAttempt']);
    $member = new Membro($username, $password);
    $user = $member->auth();
    if($user){
        $_SESSION['auth'] = true;
        //$_SESSION['username'] = $user['username'];
        header("location:../index.php");
    } else {
        echo "false";
        header("location:../view/login.php?valid=false");
    } 

} else if(isset($_POST['registerAttempt'])){
    $regUsername = $_POST['reg_username'];
    $regPassword1 = $_POST['reg_psw'];
    $regPassword2 = $_POST['reg_psw_repeat'];
    unset($_POST['registerAttempt']);
    if($regPassword1 != $regPassword2){
        header("location:../view/register.php?difpass=false");
    } else {
        $member = new Membro($regUsername, $regPassword1);
        $isUsernameValid = $member->checkusername();
        if($isUsernameValid){
            header("location:../view/register.php?exist=true");
        } else {
            $register = $member->register();
            if($register){
                header("location:../index.php?success=true");
            } else {
                header("location:../view/register.php?success=false"); 
            }
        }
    }
    
}

if(isset($_POST['logoff'])){
    unset($_SESSION['auth']);
    unset($_POST['logoff']);
    session_destroy();
    header("location:../view/login.php");
}



?>