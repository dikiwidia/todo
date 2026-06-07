<?php
require_once("../koneksi.php");
session_start();

$method = $_GET['method']; // isiannya = create, update, delete,
$name = $_POST['name'] ?? '';
$email = $_POST['abcdef'];
$password = $_POST['password'];


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
// update
if ($method == "update") {
    $id = $_POST['record_id'] ?? '';
    if ($id != '') {
        updateData($id, $data, $db);
    }
    // header("location:../index.php?page_name=user");
}


function storeData($data, $db)
{
    $count = $db->prepare("INSERT INTO users (name, email, password, ) VALUES (?, ?, ?)");
    $count->execute([$data['name'], $data['email'], $data['password']]);
    header("location:../index.php?page_name=user");
}

function deleteData($id, $db)
{
    $count = $db->prepare("DELETE FROM users WHERE id = ?");
    $count->execute([$id]);
    header("location:../index.php?page_name=user");
}
function updateData($id, $data, $db)
{
    if ($data["password"] != '') {
        $sql = $db->prepare("UPDATE users SET name = ?, email = ?, password = ? WHERE id = ?");
        $sql->execute([$data['name'], $data['email'], $data['password'], $id]);
    } else {
        $sql = $db->prepare("UPDATE users SET name = ?, email = ? WHERE id = ?");
        $sql->execute([$data['name'], $data['email'], $id]);
    }
    header("location:../index.php?page_name=user");
}

?>