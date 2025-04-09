<?php
 session_start();
include 'condb.php';    
 if(!isset($_SESSION["emp_id"]))
 {
 $show=header("location:login.php");
 }
?>
<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Profile</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="forms/style.css" rel="stylesheet">  
 </head>
 <body>
 <?php include 'menu.php'?>
     <div class="container">
     <div class="row">
     <div class="box_form">
<form method="POST" action="insert_profile.php" enctype="multipart/form-data">
<h2>Profile</h2>
<label>รหัสพนักงาน</label>
<input type= "text" class="form-control" maxlength = "6" name= "emp_id" required readonly value ="<?=$_SESSION["emp_id"]?>"> <br>
<label>ชื่อพนักงาน</label>
<input type= "text" class="form-control" name= "emp_name" required value ="<?=$_SESSION["emp_name"]?>"> <br>
<label>นามสกุล</label>
<input type= "text" class="form-control" name= "emp_lastname" required value ="<?=$_SESSION["emp_lastname"]?>"> <br>
<label>ตำแหน่ง</label>
<select class ="form-select" name = "pos_id">
    <?php
        $sql="SELECT * FROM job_position";
        $hand=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_array($hand)){
    ?>
        <option value="<?=$row['pos_id']?>">
        <?=$row['pos_name']?>
        </option>
            <?php
            }
                mysqli_close($conn); //ปิดการเชื่อมต่อฐานข้อมูล
            ?>
</select><br>
<label>เบอร์โทร</label>
<input type= "number" class="form-control" name= "emp_telephone" required> <br>
<label>Username</label>
<input type= "number" class="form-control" name= "username" required> <br>
<label>Password</label>
<input type= "number" class="form-control" name= "password" required> <br>
<label>รูปภาพ</label>
<input type="file" name = "file1" required> <br><br>
<button type= "submit" class="btn btn-danger">บันทึก</button>
<a class="btn btn-success" href="show_type.php" role="button">ยกเลิก</a>

</div>
</div>
</div>
</form>	 
</body>
</html>