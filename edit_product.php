<?php
include 'condb.php';

//รับค่าตัวแปร id มาจากไฟล์ show_employee.php ผ่าน ลิงค์ Edit
$id=$_GET['id'];
//คําสั่งดึงข้อมูลจากตาราง employee มาแสดงผลโดยเช็คเงื่อนไขจากรหัสพนักงานท่ีส่งค่ามากับตัวแปร id
$sql="SELECT * FROM product WHERE pro_id='$id' "; 
$result=mysqli_query($conn,$sql); 
$row=mysqli_fetch_array($result);

?>

<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>แกไขข้อมูล</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="forms/style.css" rel="stylesheet">  
 </head>
 <body>
     <div class="container">
     <div class="row">
     <div class="box_form">
<form method="POST" action="update_product.php" enctype="multipart/form-data">
<h2>แก้ไขข้อมูล</h2>
<label>รหัสเกม</label>
<input type= "text" class="form-control" maxlength = "6" name= "pro_id" readonly value="<?=$row['pro_id']?>"> <br>
<label>ชื่อเกม</label>
<input type= "text" class="form-control" name= "pro_name" value="<?=$row['pro_name']?>"> <br>
<label>รูปภาพ</label>
<input type= "file" class="form-control" name= "file1"> <br>
<input type= "hidden" name = "txtimg" value="<?=$row['pro_img']?>"> <br><br>
<img src="image/<?=$row['pro_img']?>" width="90px"> <br> <br>

<button type= "submit" class="btn btn-danger">บันทึก</button>
<a class="btn btn-success" href="show_product.php" role="button">ยกเลิก</a>

</div>
</div>
</div>
</form>	 
</body>
</html>

<?php mysqli_close($conn); ?>