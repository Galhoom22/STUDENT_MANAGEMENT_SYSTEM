<?php

// variables
$host = 'localhost';
$user = 'root';
$pass = '';
$database = 'students';

// connecting the database
$conn = mysqli_connect($host, $user, $pass, $database);

// error handling
if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}

// get data from the database
$result = mysqli_query($conn, "SELECT * FROM student");

// button variables
$id = '';
$name = '';
$address = '';

if (isset($_POST['id'])) {
    $id = $_POST['id'];
}
if (isset($_POST['name'])) {
    $name = $_POST['name'];
}
if (isset($_POST['address'])) {
    $address = $_POST['address'];
}

$sqls = '';

if (isset($_POST['add'])) {
    // Prepared Statement
    $stmt = $conn->prepare("INSERT INTO student (id, name, address) VALUES (?, ?, ?)");
    $stmt->bind_param("iss", $id, $name, $address);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo "<script>alert('تمت إضافة الطالب بنجاح!');</script>";
    } else {
        echo "<script>alert('حدث خطأ أثناء الإضافة!');</script>";
    }
    $stmt->close();
    header('location: index.php');
    exit();
}

if (isset($_POST['del'])) {
    // Prepared Statement
    $stmt = $conn->prepare("DELETE FROM student WHERE id = ? AND name = ? AND address = ?");
    $stmt->bind_param("iss", $id, $name, $address);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo "<script>alert('تم حذف الطالب بنجاح!');</script>";
    } else {
        echo "<script>alert('حدث خطأ أثناء الحذف!');</script>";
    }
    $stmt->close();
    header('location: index.php');
    exit();
}
