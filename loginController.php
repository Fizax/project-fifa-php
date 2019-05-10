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

require 'config.php'; //nu beschikking tot de db variable
$sql = "SELECT `admin` FROM users WHERE `admin` = :admin;";
session_start();

if ($_POST ['type'] == 'register'){

    $password = htmlentities($_POST ['password']);
    $password1 = htmlentities($_POST ['password1']);
    $email = $_POST['email'];

    $sql = "SELECT `email` FROM `users` WHERE `email` = :email;";
    $prepare = $db->prepare($sql);
    $prepare->execute([
        ':email' => $email
    ]);

    if (empty($_POST["email"])) {
        echo 'Email is required';
    } else {
        $email =($_POST['email']);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }
    if(empty($password) || empty($password1)  || empty($email))
    {
        echo 'vul de email, wachtwoord in en herhaal wachtwoord';
        exit;
    }
    $fetchedEmail = $prepare->fetchAll(PDO::FETCH_ASSOC);

    IF($fetchedEmail == true){
        $msg = 'Sorry deze email is al in gebruik | Of u moet en email invullen';
        header("location:index.php?msg=$msg");
        $msg = htmlspecialchars($_GET['msg']);
        exit;
    }

    if (strpos($_POST['password'], ' ') !== false) {
        echo "Don't try to write space.";
    }

    if($password == $password1) {

        $sql = "INSERT INTO users (email, password, admin) 
values (:email, :password, :admin)";

        $password = password_hash($password, PASSWORD_DEFAULT);

        $prepare = $db->prepare($sql);
        $prepare->execute([
            ':email'     => $email,
            ':password'  => $password,
            ':admin'     => $admin
        ]);

            header('Location: index.php');

        exit;
    }
    else{
        echo "Wachtwoord komt niet overheen";
    }

}

if ($_POST ['type'] == 'login') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $admin= $_POST['admin'];

    $connect = mysqli_connect($dbHost, $dbUser, $dbPss, $dbName);

    $sqlLogin = "SELECT * FROM users WHERE  email = '" . $email . "'";
    $query = mysqli_query($connect, $sqlLogin);

    if (mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_array($query);
        $userPasswordUnhash = $row['password'];

        if (password_verify($password, $userPasswordUnhash)) {
            session_start();
            $_SESSION['sid'] = session_id();


            if ($row['admin'] == 1) {
                $_SESSION['admin'] = true;

                header("location:admin.php");
            }
            else {
                header("location:securepage.php");
            }
        }
        else {
            header('Location: index.php');
        }
    }
}