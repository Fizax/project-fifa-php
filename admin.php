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
        $coach= htmlentities($team ['maker']);
        echo "<li><a href='delete_controler.php?id={$team['id']}'>$name, $coach</a></li>";
    }
    echo '</ul>';

echo "<a href='logout.php'>Logout</a>";
}
else {
    header("location:index.php");
}

?>

<div class="index">
    <div class="description">
        <form action="competitieController.php" method="post">
            <input type="hidden" name="type" value="team">
            <div class="button">
                <input type="submit" value="team">
            </div>
        </form>
    </div>

    <a href="team.php">maak een team</a>
