<?php
require_once("../koneksi.php");
session_start();

$method = $_GET['method']; // isiannya = create, update, delete,
$name = $_POST['name'] ?? '';
$status = $_POST['status'] ?? '';
$activity = $_POST['activity'] ?? '';

$data = [
    'name' => $name,
    'status' => $status,
    'activity' => $activity,
];

if ($method == "create")
    if ($method == "create" && $name != '' && $status != '' && $activity != '') {
        storeData($data, $db);
    }

if ($method == "delete")
    $id = $_GET['id'] ?? '';
if ($id != '') {
    deleteData($id, $db);
}
function storeData($data, $db)
{
    $count = $db->prepare("INSERT INTO list_todo (name, status, activity) VALUES (?, ?, ?)");
    $count->execute([$data['name'], $data['status'], $data['activity']]);
    header("location:../index.php?page_name=todo");
}

function deleteData($id, $db)
{
    $count = $db->prepare("DELETE FROM list_todo WHERE id = ?");
    $count->execute([$id]);
    header("location:../index.php?page_name=todo");
}
?>