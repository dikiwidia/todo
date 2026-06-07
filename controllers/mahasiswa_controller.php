<?php
require_once("../koneksi.php");
session_start();

$method = $_GET['method']; // isiannya = create, update, delete,
$name = $_POST['nim'] ?? '';
$status = $_POST['name'] ?? '';
$activity = $_POST['Jurusan'] ?? '';  // Menangkap email
$semester = $_POST['semester'] ?? ''; // Menangkap angka/value semester
$jurusan = $_POST['Email'];

$data = [
    'nim' => $nim,
    'Name' => $Name,
    'Jurusan' => $jurusan,
    'Semester' => $Semester,
    'Email' => $Email,
];

// create
if ($method == "create" && $Nim != '' && $Name != '' && $Jurusan != '' && $Semester != '' && $Email) {
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
    header("location:../index.php?page_name=Mahasiswa");
}


function storeData($data, $db)
{
    $sql = $db->prepare("INSERT INTO mahasiswa (Nim, Name, jurusan, Semester, Email) VALUES (?, ?, ?)");
    $sql->execute([$data['Nim'], $data['Name'], $data['Jurusan'], $data['Semester'], $data['email']]);
    header("location:../index.php?page_name=Mahasiswa");
}

function deleteData($id, $db)
{
    $sql = $db->prepare("DELETE FROM Mahasiswa WHERE id = ?");
    $sql->execute([$id]);
    header("location:../index.php?page_name=Mahasiswa");
}

function updateData($id, $data, $db)
{
    $sql = $db->prepare("UPDATE Mahasiswa SET Nim = ?, Name = ?, Jurusan = ?, Semester = ?, Email = ? WHERE id = ?");
    $sql->execute([$data['Nim'], $data['Name'], $data['Jurusan'], $data['Semester'], $data['Email'], $id]);
    header("location:../index.php?page_name=mahasiswa");
}
?>