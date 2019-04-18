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
    $coach = $_POST['coach'];

    $sql = "INSERT INTO teams (name, players, coach) 
values (:name, :players, :coach)";

    $prepare = $db->prepare($sql);
    $prepare->execute([
        ':name'  => $name,
        ':players'=> $players,
        ':coach'=> $coach
    ]);
    header('Location: index.php');//wil string weten
    exit;
};