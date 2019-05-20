<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 20-May-19
 * Time: 11:29
 */

require 'config.php';

header('conectent-Type: application/json');

$sql ="SELECT * FROM `match`";

$query = $db->query($sql);

$match = $query->fetchALL (PDO::FETCH_ASSOC);

echo json_encode($match);