<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 16-Apr-19
 * Time: 11:19
 */

session_start();
if ($_SERVER['REQUEST_METHOD'] != 'POST'){
    header('Location: index.php');
    exit;
}

require 'config.php';

if ($_POST ['type'] == 'create'){


    $name = $_POST['name'];
    $coach = $_SESSION['pId'];


    $sql = "INSERT INTO teams (name, maker) 
values (:name, :maker)";

    $prepare = $db->prepare($sql);
    $prepare->execute([
        ':name'  => $name,
        ':maker'=> $coach
    ]);
    header('Location: index.php');//wil string weten
    exit;
};