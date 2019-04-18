<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 18-Apr-19
 * Time: 11:54
 */

require 'config.php';

header('conectent-Type: application/json');

$sql ="SELECT * FROM users";

$query = $db->query($sql);

$users = $query->fetchALL (PDO::FETCH_ASSOC);

echo json_encode($users);

