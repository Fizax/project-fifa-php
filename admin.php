<?php
require 'config.php';

session_start();
if($_SESSION['sid']==session_id())
{
echo "Je bent admin";


echo "<a href='logout.php'>Logout</a>";
}
else {
    header("location:index.php");
}


?>