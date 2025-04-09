<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>เพิ่มข้อมูลประเภทสินค้า</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="forms/style.css" rel="stylesheet">  
 </head>
 <body>
     <div class="container">
     <div class="row">
     <div class="box_form">
<form method="POST" action="insert_type.php" >
<h2>เพิ่มข้อมูลประเภทสินค้า</h2>
<label>ประเภทสินค้า</label>
<input type= "text" class="form-control" name= "type_name" required> <br>
<button type= "submit" class="btn btn-danger">บันทึก</button>
<a class="btn btn-success" href="show_type.php" role="button">ยกเลิก</a>

</div>
</div>
</div>
</form>	 
</body>
</html>