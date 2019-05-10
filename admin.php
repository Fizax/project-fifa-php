<?php
require 'config.php';
$sql = "SELECT * FROM teams";              //string even opslaan die we later gaan gebruiken
$query = $db->query($sql);                      //qurey verzoek data base sla ik op in variablke
$teams = $query->fetchAll(PDO::FETCH_ASSOC); //multie demensionale array //alle colomen wil ik fetchen -> binnen halen


session_start();
if($_SESSION['sid']==session_id())
{
echo "Je bent admin";

    echo '<ul>';
    foreach ($teams as $team){
        $name = htmlentities($team['name']);
        $players= htmlentities($team ['players']);
        $coach= htmlentities($team ['coach']);
        echo "<li><a href='delete_controler.php?id={$team['id']}'>$name $players $coach</a></li>";
    }
    echo '</ul>';

echo "<a href='logout.php'>Logout</a>";
}
else {
    header("location:index.php");
}
?>