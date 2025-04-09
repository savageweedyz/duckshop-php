<?php
include './admin/condb.php';


// รับข้อมูลจากฟอร์ม
$name = $_POST['name'];
$surname = $_POST['surname'];
$telephone = $_POST['telephone'];
$username = $_POST['username'];
$password = $_POST['password'];

// เขียนคำสั่ง SQL เพื่อเพิ่มข้อมูล
$sql = "INSERT INTO tb_customer (name,surname,telephone,username,password) 
VALUES ('$name', '$surname', '$telephone', '$username', '$password')";

// ประมวลผลคำสั่ง SQL
$result = mysqli_query($conn, $sql);
if($result) {
    echo "<script>alert('บันทึกข้อมูลเรียบร้อยแล้ว');</script>";
    echo "<script>window.location='register.php';</script>";
    
}else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    echo "<script>alert('ไม่สามารถบันทึกข้อมูลได้');</script>";
}
mysqli_close($conn);   //ปิดการเชื่อมต่อฐานข้อมูล

// ปิดการเชื่อมต่อ
$conn->close();
?>