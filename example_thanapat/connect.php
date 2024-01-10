<?php
// เชื่อมต่อกับฐานข้อมูล
$conn = new mysqli('localhost','root','','example_thanapat');

// ตรวจสอบการเชื่อมต่อ
if ($conn->connect_error) {
    die("connection failed : " . $conn->connect_error);
}

// ถ้ามีการส่งข้อมูลจากฟอร์ม
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_card = $_POST['id_card'];
    $password = $_POST['password'];

    // เพิ่มโค้ดการเช็คข้อมูลและการเพิ่มข้อมูลเข้าฐานข้อมูลตรงนี้

    // เช่น
    $sql = "INSERT INTO register (id_card, password) VALUES ('$id_card', '$password')";
    if ($conn->query($sql) === TRUE) {
        echo "register ok..";
    } else {
        echo "error " . $conn->error;
    }
}

$conn->close();
?>
