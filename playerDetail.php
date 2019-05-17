<?php
require 'config.php';
$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "project_fifa";

$connect = mysqli_connect($hostname, $username, $password, $databaseName);
$query = "SELECT * FROM `teams`";
$result = mysqli_query($connect, $query);


?>

<?php
require 'config.php';
$id = $_GET['id'];
$sql = "SELECT * FROM users WHERE id = :id";
$prepare = $db->prepare($sql);
$prepare->execute([
    ':id' => $id
]);
$team = $prepare->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Fifa</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
        <h1>Voeg <?php echo $team['email'] ?> aan een team toe</h1>
        <form action="playerController.php?id=<?=$id?>" method="post">
            <input type="hidden" name="type" value="edit">
            <select name="team" >
                <?php while($row = mysqli_fetch_array($result)):;?>
                    <option id="team" value="<?php echo $row[0];?>"><?php echo $row[1];?></option>
                <?php endwhile;?>
            </select>
            </div>
            <input type="submit" id='addPlayer' value="voeg toe">
        </form>
