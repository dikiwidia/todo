<?php
require_once("../koneksi.php");
session_start();

$method = $_GET['method']; // isiannya = create, update, delete,
$name = $_POST['name'] ?? '';
$email = $_POST['abcdef'];
$password = $_POST['password'];
$name = $_POST['name'];


$data = [
    'email' => $email,
    'password' => $password,
    'name' => $name,
];

if ($method == "create" && $email != '' && $password != '' && $name != '')
    if ($method == "create") {
        storeData($data, $db);
    }

if ($method == "delete") {
    $id = $_GET['id'] ?? '';
    if ($id != '') {
        deleteData($id, $db);
    }
}

function storeData($data, $db)
{
    $count = $db->prepare("INSERT INTO users (email, password, name) VALUES (?, ?, ?)");
    $count->execute([$data['email'], $data['password'], $data['name']]);
    header("location:../index.php?page_name=user");
}

function deleteData($id, $db)
{
    $count = $db->prepare("DELETE FROM users WHERE id = ?");
    $count->execute([$id]);
    header("location:../index.php?page_name=user");
}

?>