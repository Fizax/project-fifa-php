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

<h2>Teams</h2>
<?php
echo '<ul>';
foreach ($teams as $team){
    $username = htmlentities($team['name']);
    $email = htmlentities($team ['players']);
    echo "<li><a href='scheme.php?id={$team['id']}'>$name, $players</a></li>";
}
echo '</ul>';
?>
</body>
</html>