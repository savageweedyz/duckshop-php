<?php
include 'condb.php';
?>

<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     ><title>show type</title>
     <meta name="viewport" content="width=device-width, initialscale=1.0">
     <link href="css/bootstrap.min.css" rel="stylesheet">
     <link href="forms/style.css" rel="stylesheet">  
 </head>
 <body>
    <div class="container">
        <div class="container">
        <div class="box_form">
            <form method="POST" action="insert_job.php" >
            <label>ตำแหน่งอาชีพ</label>
            <input type= "text" class="form-control" placeholder="ตำแหน่งอาชีพ" name= "pos_id" required> <br>
            <label>เพิ่มอาชีพ</label>
            <input type= "text" class="form-control" placeholder="ชื่ออาชีพ" name= "pos_name" required> <br>
            <button type= "submit" class="btn btn-danger">บันทึก</button>
            <a class="btn btn-success" href="show_job.php" role="button">ยกเลิก</a>

        </div>
    </div>
    </div>
</form>	 
</body>
</html>