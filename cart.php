<?php
session_start(); //เรียกใช้งานฟังก์ชัน session_start()ทุกครั้งเมื่อมีการเรียกใช้ตัวแปร session
include 'admin\condb.php'; //เปิดการเชื่อมต่อฐานข้อมูลผ่านไฟล์ condb.php

if(!isset($_SESSION["cusid"]))
{
$show=header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>ตะกร้าสินค้า</title>
  <!-- Bootstrap CSS -->
 <link href="css/bootstrap.min.css" rel="stylesheet">
 <script src="js/bootstrap.bundle.min.js" ></script>
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
</head>

<body style="background-color:#566573;">
<div class="container-fluid"> <!-- Include the sidebar from menu11.php -->
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-3">
        <?php include 'menu1.php'; ?>
        </div><br><br>

<div class="card card-img-top mx-auto d-block p-3" style="width: 45%;">
  <div class="card-body"> <form id="form1" method="POST" action="insert_cart.php">
 <div class ="row">
 <div class ="col-md-10">
<div class="alert alert-success h4" role="alert">
 การสั่งซื้อสินค้า
</div>
 <table class = "table table-hover">
 <tr>
 <th>ลำดับที่</th>
 <th>ชื่อสินค้า</th>
 <th>ราคา</th>
 <th>จำนวน</th>
 <th>ราคารวม</th>
 <th>เพิ่ม - ลด</th>
 <th>ลบ</th>
 </tr>
<?php

$Total = 0;
$sumPrice = 0;
$m = 1;
for ($i=0; $i <= (int)$_SESSION["intLine"]; $i++){
     if(($_SESSION["strTopID"][$i]) != ""){
     $sql="select * from top_up
     where top_id ='" . $_SESSION["strTopID"][$i] . "' ";
     $result=mysqli_query($conn,$sql);
     $row_pro = mysqli_fetch_array($result);
    
     $_SESSION["price"] = $row_pro['price'];
     $Total = $_SESSION["strQty"][$i];
     $sum = $Total * $row_pro['price'];
     $sumPrice = $sumPrice + $sum;
     $_SESSION["sum_price"] = $sumPrice;
    ?>
     <tr>
     <td><?=$m?></td>
     <td>
     
     <?=$row_pro['top_name']?>
     </td>
     <td><?=$row_pro['price']?></td>
     <td><?=$_SESSION["strQty"][$i]?></td>
     <td><?= $sum?></td>
     <td>
     <a href="order.php?id=<?=$row_pro['top_id']?>" class="btn
    btn-outline-primary">+</a>
    
    <?php if($_SESSION["strQty"][$i] > 1){ ?>
     <a href="order_del.php?id=<?=$row_pro['top_id']?>" class="btn
    btn-outline-primary">-</a>
     <?php } ?>
     </td>
     <td><a href="pro_delete.php?Line=<?=$i?>" >
     <img src="image/delete.png" width="30" > </a></td>
     </tr>
    <?php
    $m=$m+1;
    }
    }
    mysqli_close($conn);
    ?>
    <tr>
    <td class="text-end" colspan="4">รวมเป็นเงิน</td>
    <td class="text-center"><?=$sumPrice?></td>
    <td >บาท</td>
    </tr>
    </table>
    <div style="text-align:right">
    <a href ="game.php" > <button type="button" class="btn btn-outline-secondary">เลือกสินค้า</button> </a>
    <button type="submit" class="btn btn-outline-primary">ยืนยันการสั่งซื้อ</button>
    </div>
    </div>
    <br>
     <div class="row">
     <div class="col-md-4">
     <div class="alert alert-success" h4 role="alert">
ข้อมูลสำหรับจัดส่งสินค้า
</div>
ชื่อ-นามสกุล:
<div class="form-control " required name="cus_name" rows="1"><?=$_SESSION["cusname"]?> <?=$_SESSION["cuslastName"]?></div><br>
เบอร์โทรศัพท์:
<input type="number" name="cus_tel" class="form-control " required value=<?=$_SESSION["custel"]?> >
<br><br><br>
 </div>
 </div>
</form>
</div>

</body>
</html>