<?php
require_once("koneksi.php");
session_start();
$email = $_POST['email'];
$password = $_POST['password'];
// if ($email == 'admin@mail.com' && $password == 'admin') {
//     $_SESSION['status_login'] = true;
//     header("location:index.php");
// } else {
//     header("location:login.php");
// }
$count = $db->prepare("SELECT COUNT(*) FROM users WHERE email = ? AND password = ?");
$count->execute([$email, $password]);

if ($count->fetchColumn() > 0) {
    $_SESSION['status_login'] = true;
    header("location:index.php");
} else {
    header("location:login.php");
}
?>