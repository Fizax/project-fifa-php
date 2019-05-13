<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 13-May-19
 * Time: 10:07
 */

require 'config.php';

header('conectent-Type: application/json');

$sql ="SELECT * FROM teams";

$query = $db->query($sql);

$teams = $query->fetchALL (PDO::FETCH_ASSOC);

echo json_encode($teams);