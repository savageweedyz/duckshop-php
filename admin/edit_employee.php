<?php
include 'condb.php';


//รับค่าตัวแปร id มาจากไฟล์ show_employee.php ผ่าน ลิงค์ Edit
$id=$_GET['id'];
//คําสั่งดึงข้อมูลจากตาราง employee มาแสดงผลโดยเช็คเงื่อนไขจากรหัสพนักงานท่ีส่งค่ามากับตัวแปร id
$sql="SELECT * FROM employee WHERE emp_id='$id' "; 
$result=mysqli_query($conn,$sql); 
$row=mysqli_fetch_array($result);
$pos= $row['pos_id'];
?>

<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>แกไขข้อมูลสินค้า</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="forms/style.css" rel="stylesheet">  
 </head>
 <body>
     <div class="container">
     <div class="row">
     <div class="box_form">
<form method="POST" action="update_employee.php" enctype="multipart/form-data">
<h2>แก้ไขข้อมูลพนักงานา</h2>
<label>รหัสพนักงาน</label>
<input type= "text" class="form-control" maxlength = "6" name= "emp_id" readonly value="<?=$row['emp_id']?>"> <br>
<label>ชื่อพนักงาน</label>
<input type= "text" class="form-control" name= "emp_name" value="<?=$row['emp_name']?>"> <br>
<label>นามสกุล</label>
<input type= "text" class="form-control" name= "emp_lastname" value="<?=$row['emp_lastname']?>"> <br>
<label>ตำแหน่งอาชีพ</label>
<select class ="form-select" name = "pos_id">
    <?php
        $sql="SELECT * FROM job_position";
        $hand=mysqli_query($conn,$sql);
        while($row1=mysqli_fetch_array($hand)){
            $pos_ID= $row1['pos_id'];
    ?>
        <option value="<?=$row1['pos_id']?>" <?php if($pos_ID==$pos) {echo "selected=selected";} ?>>
        <?=$row1['pos_name']?>
        </option>
            <?php
            }
                //mysqli_close($conn); //ปิดการเชื่อมต่อฐานข้อมูล
            ?>
</select><br>
<label>เบอร์โทร</label>
<input type= "number" class="form-control" name= "emp_telephone" value="<?=$row['emp_telephone']?>"> <br>
<label>รูปภาพ</label>
<input type= "file" class="form-control" name= "file1"> <br>
<input type= "hidden" name = "txtimg" value="<?=$row['emp_img']?>"> <br><br>
<img src="image/<?=$row['emp_img']?>" width="90px"> <br> <br>

<button type= "submit" class="btn btn-success">บันทึก</button>
<a class="btn btn-danger" href="show_employee.php" role="button">ยกเลิก</a>

</div>
</div>
</div>
</form>	 
</body>
</html>

<?php mysqli_close($conn); ?>