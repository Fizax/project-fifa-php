<?php
require 'config.php';
$sql = "SELECT * FROM users";              //string even opslaan die we later gaan gebruiken
$query = $db->query($sql);                      //qurey verzoek data base sla ik op in variablke
$users = $query->fetchAll(PDO::FETCH_ASSOC); //multie demensionale array //alle colomen wil ik fetchen -> binnen halen

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
    <?php

        echo '<ul>';
        foreach ($users as $user){
        $name = htmlentities($user['email']);
        $team = htmlentities($user['team']);
        echo "<li><a href='playerDetail.php?id={$user['id']}'>$name, $team</a></li>";
        }
        echo '</ul>';
    ?>
</body>
</html>

