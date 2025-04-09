<?php
include 'condb.php';
?>

<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>รายชื่ออาชีพ</title>
     <link href="css/bootstrap.min.css" rel="stylesheet">
     <meta name="viewport" content="width=device-width, initialscale=1.0">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 </head>
 <body>
    <?php include 'menu.php'?>
    <div class="container">
    <div class=" h4 text-center alert alert-danger mb-4 mt-4 "role="alert"> แสดงข้อมูลอาชีพ </div>
        <div class="container">
        <div class="text-end">
        <a class="btn btn-primary mb-4" href="fr_job.php" role="button">Add +</a>
        </div>
            <table class="table table-warning table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ตำแหน่งอาชีพ</th>
                        <th scope="col">ชื่ออาชีพ</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <?php
                $sql = "SELECT * FROM job_position";
                $result=mysqli_query($conn,$sql);
                while($row=mysqli_fetch_array($result)){
                ?>
                <tr>
                    <td scope="row"><?=$row["pos_id"]?></td>
                    <td scope="row"><?=$row["pos_name"]?></td>
                    <td><a class="btn btn-warning mb-4" href="edit_job.php?id=<?=$row["pos_id"]?>" role="button">Edit</a></td>
                    <td><a class="btn btn-danger mb-4" href="dl_job.php?id=<?=$row["pos_id"]?>"onclick="Del(this.href);return false;" role="button">Delete</a></td>
                </tr>
                <?php
                }
                mysqli_close($conn); //ปิดการเชื่อต่อฐานข้อมูล
                ?>
            </table>
        </div>
    </div>
    </div>
 </body>
 </html>
