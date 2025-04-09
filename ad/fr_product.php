<?php
include '../admin/condb.php';
?>

<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>เพิ่มเกม</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="forms/style.css" rel="stylesheet">  
 </head>
 <body>
     <div class="container">
     <div class="row">
     <div class="box_form">
<form method="POST" action="insert_product.php" enctype="multipart/form-data">
<h2>เพิ่มข้อมูล</h2>
<label>รหัสสินค้า</label>
<input type= "text" class="form-control" maxlength = "6" name= "pro_id" required> <br>
<label>ชื่อเกม</label>
<input type= "text" class="form-control" name= "pro_name" required> <br>
<label>รูปภาพ</label>
<input type="file" name = "file1" required> <br><br>
<button type= "submit" class="btn btn-danger">บันทึก</button>
<a class="btn btn-success" href="index_ad.php" role="button">ยกเลิก</a>

</div>
</div>
</div>
</form>	 
</body>
</html>