<?php
/**
 * Created by PhpStorm.
 * User: Lorenzo Rijnvos
 * Date: 24/05/2019
 * Time: 09:52
 */

require 'Config.php';
//header("Access-Control-Allow-Origin: *");
//header("Content-Type: application/json; charset=UFT-8");
$sql = "SELECT name FROM teams";
$query = $db->query($sql);
$teams = $query->fetchAll(PDO::FETCH_ASSOC);
$competition = array();
$competition['matches'] = array();
foreach ($teams as $team){
    foreach ($teams as $opponoment) {
        if($team['name'] != $opponoment['name']){
            array_push($competition['matches'], $team['name'] . ' - ' . $opponoment['name']);
        }
    }
}
if (isset($competition)) {
    http_response_code(200);
    echo json_encode($competition);
}
else{
    http_response_code(404);
}
