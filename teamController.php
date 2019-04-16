<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 16-Apr-19
 * Time: 11:19
 */

if ($_SERVER['REQUEST_METHOD'] != 'POST'){
    header('Location: index.php');
    exit;
}

require 'config.php';

if ($_POST ['type'] == 'create'){

    $name = $_POST['name'];
    $players = $_POST['players'];

    $sql = "INSERT INTO teams (name, players) 
values (:name, :players)";

    $prepare = $db->prepare($sql);
    $prepare->execute([
        ':name'  => $name,
        ':players'=> $players
    ]);
    header('Location: index.php');//wil string weten
    exit;
};