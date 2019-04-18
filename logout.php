<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 18-Apr-19
 * Time: 09:23
 */

echo "Logged out scuccessfully";
header('Location: index.php');

session_start();
session_destroy();
setcookie(PHPSESSID,session_id(),time()-1);