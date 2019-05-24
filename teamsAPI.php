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


if (isset( $_GET['id'] ) && !empty( $_GET['id'])){
    $id = $_GET['id'] - 1;
    $team = new stdClass;
    $team->name = "";
    $team->id = "";
    $team->name = $teams[$id]['name'];
    $team->id = $teams[$id]['teamCreator'];
    header('Content-Type: application/json');
    echo json_encode($team);
}
else {
    $teamNames['names'] = array();
    $length = count($teams) - 1;
    for ($i = 0; $i <= $length; $i++) {
        $teamNames['names'][] = $teams[$i]['name'];
    }
    header('Content-Type: application/json');
    echo json_encode($teamNames);
}