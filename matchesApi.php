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

$matches = $query->fetchALL (PDO::FETCH_ASSOC);

$scores = array();

$scores['scores'] = array();

foreach ($matches as $match) {


    array_push($scores['scores'], $match['score1'] . $match['team1'] . ' - ' . $match['team2'] . $match['score2']);
}

echo json_encode($scores);