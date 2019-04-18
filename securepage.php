<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 18-Apr-19
 * Time: 09:23
 */

session_start();
if($_SESSION['sid']==session_id())
{
    echo "<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <link rel=\"stylesheet\" href=\"style.css\">
    <title>Fifa</title>
</head>
<body>

<div class=\"index\">
    <div class=\"description\">
        <a href=\"team.php\">Maak een team aan</a>
        
    </div>
    <div>
        <a href=\"scheme.php\">Bekijk de wedstrijd schema</a>
    </div>
</div>
</body>
</html>";
    echo "<a href='logout.php'>Logout</a>";
}
else
{
    header("location:index.php");
}