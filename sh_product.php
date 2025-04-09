<?=
include 'admin\condb.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="forms/style.css" rel="stylesheet">  
    <script src="js/bootstrap.bundle.min.js"></script>
    <title>รายละเอียดการเติมเกม</title>
</head>
<body>
<?php include 'menu1.php'?>

<div class="container">
  <div class="row">


<?php
//คำสั่งเลือกข้อมูลจากตาราง product ขึ้นมาแสดงผล
$sql = "SELECT * FROM product order by pro_id";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result)){
?>


    <div class="col-sm-4">
        <div class="text-center">
    <img src="admin/image/<?=$row['pro_img']?>" width = "200px" height = "250px"
    class ="mt-4 p-3 mb-4 border" ><br>


    รหัสสินค้า : <?=$row["pro_id"]?> <br>
    ชื่อสินค้า : <h5 class = "text-success"><?=$row["pro_name"]?></h5>
    ราคา <b class ="text-danger"><?=$row["price"]?></b> บาท <br>
    <a href="sh_product_detail.php?id=<?=$row['pro_id']?><"button type="button" class="btn btn-outline-success mt-4   ">รายละเอียด</button></a>
    </div>
    </div>

<?php
}
mysqli_close($conn); //ปิดการเชื่อต่อฐานข้อมูล
?>




  </div>
</div>
    
</body>
</html>