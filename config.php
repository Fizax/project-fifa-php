<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 16-Apr-19
 * Time: 09:28
 */

$dbHost = 'localhost';
$dbUser = 'root';
$dbPss = '';
$dbName = 'project_fifa';

$db = new pdo(
    "mysql:host=$dbHost;dbname=$dbName",
    $dbUser,
    $dbPss
);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
