<?php
include 'condb.php';
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
role="alert"> แสดงข้อมูลสินค้า </div>
<div class="text-end">
    <a class="btn btn-primary mb-4" href="fr_product.php" role="button">Add +</a>
</div>
<table class="table table-striped">
<tr>
<th>รหัสสินค้า</th>
<th>ชื่อสินค้า</th>
<th>ประเภทสินค้า</th>
<th>ราคาสินค้า</th>
<th>จำนวน</th>
<th>รูปภาพ</th>
<th>Edit</th>
<th>Delete</th>
</tr>
<?php
//คำสั่งเลือกข้อมูลจากตาราง product ขึ้นมาแสดงผล
$sql = "SELECT * FROM product p,type t WHERE p.type_id=t.type_id";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result)){
?>
<tr>
<td><?=$row["pro_id"]?></td>
<td><?=$row["pro_name"]?></td>
<td><?=$row["type_name"]?></td>
<td><?=$row["price"]?></td>
<td><?=$row["amount"]?></td>
<td><img src="image/<?=$row['pro_img']?>" width="90px" height="100px"></td>
<td><a class="btn btn-warning mb-4" href="edit_product.php?id=<?=$row["pro_id"]?>" role="button">Edit</a></td>
<td><a class="btn btn-danger mb-4" href="dl_product.php?id=<?=$row["pro_id"]?>"onclick="Del(this.href);return false;" role="button">Delete</a></td>
</tr>
<?php
}
mysqli_close($conn); //ปิดการเชื่อต่อฐานข้อมูล
?>
</table>
</div>
</body>
</html>
<script>  function Del(mypage){     
    var agree=confirm("คุณต้องการลบข้อมูลหรือไม่");     
    if(agree){         
        window.location=mypage;     
        } } 
</script>