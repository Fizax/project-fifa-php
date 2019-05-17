<?php
require 'config.php';
if ($_POST['type'] == 'edit') {
    $id = $_GET['id'];
    $sql = 'UPDATE users SET
              team      = :team
            WHERE id = :id';
    $prepare = $db->prepare($sql);
    $prepare->execute([
        ':team'         => $_POST['team'],
        ':id'           => $id
    ]);

    header("location: players.php");
    exit;
};