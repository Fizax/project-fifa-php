<?php
require "config.php";                           //alles meegeven wat ik wil gaan gebruiken hier onder
$sql = "SELECT * FROM teams";              //string even opslaan die we later gaan gebruiken
$query = $db->query($sql);                      //qurey verzoek data base sla ik op in variablke
$teams = $query->fetchAll(PDO::FETCH_ASSOC); //multie demensionale array //alle colomen wil ik fetchen -> binnen halen

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>fifa</title>
</head>
<body>

<h2>Teams voeg spelers toe</h2>
<?php
echo '<ul>';
foreach ($teams as $team){
    $name = htmlentities($team['name']);
    $coach= htmlentities($team ['maker']);
    echo "<li><a href='teamDetail.php?id={$team['id']}'>$name $coach</a></li>";
}
echo '</ul>';
?>

</body>
</html>
<?php
require 'config.php';
$sql = "SELECT * FROM teams";
$query = $db->query($sql);
$teams = $query->fetchAll(PDO::FETCH_ASSOC);
$amountOfTeams = count($teams);

echo "<ul>";
    foreach ($teams as $team){
    $teams = array_slice($teams, 1, $amountOfTeams);

    foreach ($teams as $oppositeTeam){
    $team1 = $team['name'];
    $team2 = $oppositeTeam['name'];
    echo "<li>$team1" . " - " . "$team2</li>";
    }
    }
    echo "</ul>";

?>
