<?php
/**
 * Created by PhpStorm.
 * User: Lorenzo Rijnvos
 * Date: 10/05/2019
 * Time: 11:27
 */
$id=$_GET['id'];
$sql ="DELETE row FROM teams WHERE id= $id";
$query = mysqli_query($connect, $sql);
$row = mysqli_fetch_array($query);
header("Location: admin.php");
