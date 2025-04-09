<?php
include 'condb.php';
?>

<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>เพิ่มข้อมูลพนักงาน</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="forms/style.css" rel="stylesheet">  
 </head>
 <body>
     <div class="container">
     <div class="row">
     <div class="box_form">
<form method="POST" action="insert_employee.php" enctype="multipart/form-data">
<h2>เพิ่มข้อมูลพนักงาน</h2>
<label>รหัสพนักงาน</label>
<input type= "text" class="form-control" maxlength = "6" name= "emp_id" required> <br>
<label>ชื่อพนักงาน</label>
<input type= "text" class="form-control" name= "emp_name" required> <br>
<label>นามสกุล</label>
<input type= "text" class="form-control" name= "emp_lastname" required> <br>
<label>เบอร์โทร</label>
<input type= "text" class="form-control" name= "emp_telephone" required> <br>
<label>ตำแหน่งอาชีพ</label>
<input type= "text" class="form-control" name= "pos_id" required> <br>
<label>รูปภาพ</label>
<input type="file" name = "file1" required> <br><br>
<button type= "submit" class="btn btn-danger">บันทึก</button>
<a class="btn btn-success" href="show_employee.php" role="button">ยกเลิก</a>

</div>
</div>
</div>
</form>	 
</body>
</html>