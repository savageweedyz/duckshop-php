<?php
session_start();
include '../admin/condb.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initialscale=1.0">
<link href="css/bootstrap.min.css" rel="stylesheet" >
<script src="js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body style="background-color:#566573;">
<div class="container-fluid"> <!-- Include the sidebar from menu11.php -->
    <div class="row">
<div class="col-md-3">
<?php include 'menu1.php'?>
</div><br><br>
</div>

<div class="card mx-auto d-block p-3" style="width: 55%;">
  <div class="card-body"> <form id="form1" method="POST">
 <div class ="row">
    <div class="container">
        <div class="col-mr-3">
        <div class=" h4 text-center alert alert-success mb-6"role="alert"> รายงานการสั่งซื้อ </div>
<table class="table table-striped">
<tr>
<th>เลขใบสั่งซื้อ</th>
<th>วันที่สั่งซืิ้อ</th>
<th>ชื่อลูกค้า</th>
<th>เบอร์โทร</th>
<th>ราคารวมสุทธิ</th>
<th>สถานะ</th>
<th>รายละเอียดสินค้า</th>
</tr>
<?php
//คำสั่งเลือกข้อมูลจากตาราง product ขึ้นมาแสดงผล
$sql = "SELECT * FROM tb_order";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result)){
    $status = $row['order_status'];
?>
<tr>
<td><?=$row["orderID"]?></td>
<td><?=$row["reg_date"]?></td>
<td><?=$row["cus_name"]?></td>
<td><?=$row["telephone"]?></td>
<td><?=$row["total_price"]?></td>
<td>
    <?php
    if($status == 1){
        echo "<b style = 'color:red'> ยังไม่ชำระเงิน </br>";
    }else if ($status == 2){
        echo "<b style = 'color:blue'> ชำระเงินแล้ว </b>";
    }else if ($status == 0){
        echo "<b style = 'color:red'> ยกเลิกการสั่งซื้อ </b>";
    }
    ?>
</td>
<td><a class="btn btn-warning mb-4" href="order_detail.php?id=<?=$row["orderID"]?>" role="button">รายละเอียดสินค้า</a></td>
</tr>
<?php
}
mysqli_close($conn); //ปิดการเชื่อต่อฐานข้อมูล
?>
</table>
</div>
</body>
</html>