<?php
include 'condb.php';

//รับค่าตัวแปร id มาจากไฟล์ show_employee.php ผ่าน ลิงค์ Edit
$id=$_GET['id'];
//คําสั่งดึงข้อมูลจากตาราง employee มาแสดงผลโดยเช็คเงื่อนไขจากรหัสพนักงานท่ีส่งค่ามากับตัวแปร id
$sql="SELECT * FROM top_up WHERE top_id='$id' "; 
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
<form method="POST" action="update_top_up.php" enctype="multipart/form-data">
<h2>แก้ไขข้อมูล</h2>
<label>รหัสสินค้า</label>
<input type= "text" class="form-control" maxlength = "6" name= "top_id" readonly value="<?=$row['top_id']?>"> <br>
<label>ชื่อสินค้า</label>
<input type= "text" class="form-control" name= "top_name" value="<?=$row['top_name']?>"> <br>

<?php
$sql = "SELECT * FROM product";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result)){
    $typeid=$row['pro_id']
  ?>
  
  <option value="<?=$row['pro_id']?>" <?php if($proid==$pro_id) {echo "selected=selected";} ?>>
  <?=$row['pro_name']?></option>

<?php
}
//mysqli_close($conn);
?>

</select>

<br>
<label>ราคา</label> <br>
<input type="number" class="form-control" name="price" value=<?=$row1['price']?> > <br>
<label>จำนวน</label> <br>
<input type="number" class="form-control" name="amount" value=<?=$row1['amount']?> > <br>
<label>รูปภาพ</label>
<input type= "file" class="form-control" name= "file1"> <br>
<input type= "hidden" name = "txtimg" value="<?=$row['top_pic']?>"> <br><br>
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