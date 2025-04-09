<?php
include 'condb.php';


//รับค่าตัวแปร id มาจากไฟล์ show_employee.php ผ่าน ลิงค์ Edit
$id=$_GET['id'];
//คําสั่งดึงข้อมูลจากตาราง employee มาแสดงผลโดยเช็คเงื่อนไขจากรหัสพนักงานท่ีส่งค่ามากับตัวแปร id
$sql="SELECT * FROM department WHERE dep_id='$id' "; 
$result=mysqli_query($conn,$sql); 
$row=mysqli_fetch_array($result);
?>

<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>แกไขข้อมูลแผนก</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="forms/style.css" rel="stylesheet">  
 </head>
 <body>
     <div class="container">
     <div class="row">
     <div class="box_form">
<form method="POST" action="update_department.php" enctype="multipart/form-data">
<h2>แก้ไขข้อมูลแผนก</h2>
<label>ตำแหน่งแผนก</label>
<input type= "text" class="form-control" name= "dep_id" readonly value="<?=$row['dep_id']?>"> <br>
<label>ชื่อแผนก</label>
<input type= "text" class="form-control" name= "depName" value="<?=$row['depName']?>"> <br>
<button type= "submit" class="btn btn-danger">บันทึก</button>
<a class="btn btn-success" href="show_department.php" role="button">ยกเลิก</a>

</div>
</div>
</div>
</form>	 
</body>
</html>

<?php mysqli_close($conn); ?>