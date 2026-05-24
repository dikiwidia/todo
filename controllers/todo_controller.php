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

// create
if ($method == "create" && $name != '' && $status != '' && $activity != '') {
    storeData($data, $db);
}

// delete
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
    header("location:../index.php?page_name=todo");
}


function storeData($data, $db)
{
    $sql = $db->prepare("INSERT INTO list_todo (name, status, activity) VALUES (?, ?, ?)");
    $sql->execute([$data['name'], $data['status'], $data['activity']]);
    header("location:../index.php?page_name=todo");
}

function deleteData($id, $db)
{
    $sql = $db->prepare("DELETE FROM list_todo WHERE id = ?");
    $sql->execute([$id]);
    header("location:../index.php?page_name=todo");
}

function updateData($id, $data, $db)
{
    $sql = $db->prepare("UPDATE list_todo SET name = ?, status = ?, activity = ? WHERE id = ?");
    $sql->execute([$data['name'], $data['status'], $data['activity'], $id]);
    header("location:../index.php?page_name=todo");
}