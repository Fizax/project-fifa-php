<?php
/**
 * Created by PhpStorm.
 * User: Lorenzo Rijnvos
 * Date: 10/05/2019
 * Time: 11:27
 */
require 'config.php';
$id=$_GET['id'];
$sql = "DELETE FROM `teams` WHERE `id` = $id;";
$prepare = $db->prepare($sql);
$prepare->execute([
    ':id' => $id
]);
header("Location: admin.php");
