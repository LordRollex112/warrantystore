<?php
/**
 * Created by PhpStorm.
 * User: offormachukwunonso
 * Date: 4/6/17
 * Time: 6:24 PM
 */
session_start();
require_once 'db.php';
if(!isset($_SESSION['userSession'])||$_SESSION['active'] == false){
    header('location:logout.php');
}

if(isset($_POST["make"])) {
    $id = $_POST["uid"];

    if ($conn->query("UPDATE user SET admin=1 WHERE userid='$id'")) {
        $_SESSION['admin'] = true;
        $_SESSION['verifymsg'] = "<div class='alert alert-success'>
                             <span class='glyphicon glyphicon-info-sign'></span>User account has been assigned admin privilege!
                            </div>";
        header("Location: viewusers.php");
    } else {
        $_SESSION['verifymsg'] = "<div class='alert alert-success'>
                             <span class='glyphicon glyphicon-info-sign'></span>Failed to assign admin privilege!
                            </div>";
        header("Location: viewusers.php");
    }
}

if(isset($_POST['uma'])) {
        $uid = $_POST['uid'];



    if ($conn->query("UPDATE user SET admin=0 WHERE userid='$uid'")) {
            $_SESSION['verifymsg'] = "<div class='alert alert-success'>
            <span class='glyphicon glyphicon-info-sign'></span>Admin privilege has been revoked!
            </div>";
            header("Location: viewusers.php");
        } else {
            $_SESSION['verifymsg'] = "<div class='alert alert-danger'>
            <span class='glyphicon glyphicon-info-sign'></span>User account failed to be revoked!
            </div>";
            header("Location: viewusers.php");
        }
}?>