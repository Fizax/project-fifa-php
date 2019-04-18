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
    <link rel="stylesheet" href="style.css">
    <title>Fifa</title>
</head>
<body>
<form action="teamController.php" method="post">
    <input type="hidden" name="type" value="create">
    <div class="form-group">
        <label for="name">Team Naam</label>
        <input type="text" name="name" id="name" placeholder="The Pyton">
    </div>

    <div class="form-group">
        <label for="players">spelers</label>
        <input type="text" name="players" id="players" placeholder="Tim, Rik, Daan etc..">
    </div>

    <div class="button">
        <input type="submit" value="+">
    </div>
</form>

</body>
</html>