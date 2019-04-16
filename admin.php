<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 16-Apr-19
 * Time: 09:27
 */

if ($_SERVER['REQUEST_METHOD'] != 'POST'){
    header('Location: index.php');
    exit;
}