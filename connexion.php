<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT'] . '/DB.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/User.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/UserManager.php';

if (isset($_POST['user-mail']) && isset($_POST['user-pass']))  {

    $manager = new UserManager();
    $db = new DB();

    $pass = $db->cleanInput($_POST['user-pass']);
    $mail = $db->cleanInput($_POST['user-mail']);

    $userConnected = $manager->connectUser($mail, $pass);
    if ($userConnected !== false) {
        $_SESSION['user'] = $userConnected;
    }
}

header('Location: ../panel.php');