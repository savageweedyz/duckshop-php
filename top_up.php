<?php
session_start(); 
include './admin/condb.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="forms/style.css" rel="stylesheet">  
  <script src="js/bootstrap.bundle.min.js"></script>
  <title>top-up</title>
</head>
<body>
<?php include 'menu1.php'?>

<div class="container">
        <div class="row">


<?php
//คำสั่งเลือกข้อมูลจากตาราง top_up ขึ้นมาแสดงผล
$ids = $_GET['id'];
$sql = "SELECT p.*, t.* FROM product p LEFT JOIN top_up t ON p.pro_id = t.pro_id WHERE p.pro_id='$ids'";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result)){
?>


<div class="col-md-5">
  <div class="text-end">
  <img src="admin/image/<?=$row['pro_img']?>" width="160px" height="160px" class="mt-2 p-2 mb-2 border">
  </div>
</div>
<div class="col-md-6 mt-5">
  <h5 class="text-info"><?=$row['pro_name']?></h5>
</div>


    <div class="col-sm-4">
    <div class="text-center">
    <img src="admin/image/<?=$row['top_pic']?>" width="100px" height="100px"><br>

    ราคา <b class="text-danger"><?=$row['price']?></b> บาท<br>
    <a class="btn btn-outline-success mt-3 mb-4" href="order.php?id=<?=$row['top_id']?>" role="button">Add</a>

    </div>
    </div>


<?php
}
mysqli_close($conn)
?>


  </div> <!--End row-->

        </div>
    </div>

</body>
</html>