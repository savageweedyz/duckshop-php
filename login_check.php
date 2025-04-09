<?php
// เชื่อมต่อฐำนข้อมูล
include 'admin\condb.php';

// เรียกใช้งานฟังก์ชัน session_start() ทุกครั้งเมื่อมีการใช้งานตัวแปร session
session_start();

//รับค่ำตัวแปรมำจำกไฟล์ login.php
$user=$_POST["username"];
$password=$_POST["password"];

// ต้องเข้ำรหัส Password ด้วย sha512 ก่อนกำรตัวเช็ค password ในตำรำง member
//$password = hash('sha512',$password);
// ตรวจสอบ Username และ Password ในตำรำง member

$sql="SELECT * FROM tb_customer where username='$user' and password='$password' ";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);

if($row > 0){
// ถ้ำ Username และ Password ถูกต้องจะท ำกำรก ำหนดค่ำกับตัวแปร session
$_SESSION["user"]=$row["username"];
$_SESSION["pw"]=$row["password"];
$_SESSION["cusid"]=$row['id'];
$_SESSION["cusname"]=$row['name'];
$_SESSION["cuslastName"]=$row['surname'];
$_SESSION["custel"]=$row['telephone'];
$_SESSION["add"]=$row['address'];
$show=header("location:index.php");
//echo "<script>window.location='index.php';</script>";

}else{
// ถ้ำ Username และ Password ไม่ถูกต้อง จะแจ้งข้อควำมผิดพลำดให้กับตัวแปร $_SESSION["Error"]
$_SESSION["Error1"] = "<p> Your username or password is invalid </p>";
$show=header("location:login.php");
}

echo $show;
?>