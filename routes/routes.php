<?php

require_once("../model/Membro.class.php");
require_once("../model/Communication.class.php");
session_start();

if(isset($_POST['loginAttempt'])){
    $username = $_POST['uname'];
    $password = $_POST['psw'];
    unset($_POST['loginAttempt']);
    $member = new Membro($username, $password);
    $user = $member->auth();
    if($user){
        $_SESSION['auth'] = true;
        $_SESSION['username'] = $user['login_user'];
        $_SESSION['admin'] = $user['admin'];
        if($user['admin'] == '1'){
            header("location:../view/adminMenu.php");
        }else{
            header("location:../index.php");
        }
    } else {
        header("location:../view/login.php?valid=false");
    } 

} else if(isset($_POST['registerAttempt'])){
    // USUARIO E SENHA DEVEM RESPEITAR O LIMITE DO DB
    $regUsername = $_POST['reg_username'];
    $regPassword1 = $_POST['reg_psw'];
    $regPassword2 = $_POST['reg_psw_repeat'];
    unset($_POST['registerAttempt']);
    if($regPassword1 != $regPassword2){
        header("location:../view/register.php?difpass=false");
    } else {
        if(!strlen($regPassword1) >= 4){
            header("location:../view/register.php?lenpass=false");
        } else{
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
} else if(isset($_POST['messageAtt'])){
    $name = $_POST['myname'];
    $email = $_POST['myemail'];
    $subject = $_POST['mysubject'];
    $message = $_POST['mymessage'];
    unset($_POST['messageAtt']);

    $msg = new Communication($name, $email, $subject, $message);
    $sendSuccess = $msg->sendMessage();
    header("location:../index.php?message=true");
} else if(isset($_POST['msg_id'])){
    $id = $_POST['msg_id'];
    unset($_POST['msg_id']);
    $comm = new Communication($name, $email, $subject, $message);
    $comm->markAsRead($id);
} else if(isset($_SESSION['auth'])){
    unset($_SESSION['auth']);
    session_destroy();
    header("location:../view/login.php");
}

?>