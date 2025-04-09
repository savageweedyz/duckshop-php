<?php
include 'condb.php';
$order_id = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initialscale=1.0">
<link href="css/bootstrap.min.css" rel="stylesheet" >
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
<?php include 'menu.php'?>
<div class="container">
<div class=" h4 text-center alert alert-success mb-4 mt-4 "
role="alert"> รายละเอียดสินค้า </div>
<b> เลขที่ใบสั่งซื้อ : <?=$order_id?> </b>
<table class="table table-striped">
<tr>
<th>รหัสสินค้า</th>
<th>ชื่อสินค้า</th>
<th>ราคา</th>
<th>จำนวนที่สั่ง</th>
<th>ราคารวม</th>
</tr>
<?php
//คำสั่งเลือกข้อมูลจากตาราง product ขึ้นมาแสดงผล
$sum_total = 0;
$sql = "SELECT * FROM order_detail o,product p where o.pro_id=p.pro_id and o.orderID='$order_id'";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result)){
    $sum_total= $sum_total + $row['Total'];


?>
<tr>
<td><?=$row["pro_id"]?></td>
<td><?=$row["pro_name"]?></td>
<td><?=$row["orderPrice"]?></td>
<td><?=$row["orderQty"]?></td>
<td><?=$row["Total"]?></td>
</tr>
<?php
}
mysqli_close($conn); //ปิดการเชื่อต่อฐานข้อมูล
?>
</table>
    <b>ราคารวมสุทธิ <?= number_format($sum_total,2)?> บาท </b>
</div>
</body>
</html>