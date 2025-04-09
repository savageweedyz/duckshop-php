<?php
session_start(); //เรียกใช้งานฟังก์ชัน session_start()ทุกครั้งเมื่อมีการเรียกใช้ตัวแปร session
include 'admin\condb.php'; //เปิดการเชื่อมต่อฐานข้อมูลผ่านไฟล์ condb.php
if(!isset($_SESSION["intLine"])) //เช็คเงื่อนไขถ้าแถวในตะกร้ามีค่าว่างให้ท างานใน {}
{
$_SESSION["intLine"] = 0;
$_SESSION["strTopID"][0] = $_GET["id"]; //รับค่ารหัสสินค้าผ่านตัวแปร id
$_SESSION["strQty"][0] = 1; //ก าหนดจ านวนสินค้า
header("location:cart.php");
}
else
{
$key = array_search($_GET["id"], $_SESSION["strTopID"]);

  if((string)$key != "")
  {
    $_SESSION["strQty"][$key] = $_SESSION["strQty"][$key] + 1;
  }
  else
  {
     $_SESSION["intLine"] = $_SESSION["intLine"] + 1;
     $intNewLine = $_SESSION["intLine"];
     $_SESSION["strTopID"][$intNewLine] = $_GET["id"];
     $_SESSION["strQty"][$intNewLine] = 1;
     }
     header("location:cart.php");
     }
?>
     