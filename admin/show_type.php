<?php
include 'condb.php';
?>

<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>show type</title>
     <link href="css/bootstrap.min.css" rel="stylesheet">
     <meta name="viewport" content="width=device-width, initialscale=1.0">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 </head>
 <body>
    <?php include 'menu.php'?>
    <div class="container">
    <div class=" h4 text-center alert alert-danger mb-4 mt-4 "role="alert"> แสดงข้อมูลประเภทสินค้า </div>
        <div class="container">
        <div class="text-end">
        <a class="btn btn-primary mb-4" href="fr_type.php" role="button">Add +</a>
        </div>
            <table class="table table-warning table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">รหัสประเภท</th>
                        <th scope="col">ชื่อประเภทสินค้า</th>
                    </tr>
                </thead>
                <?php
                $sql = "SELECT * FROM type";
                $result=mysqli_query($conn,$sql);
                while($row=mysqli_fetch_array($result)){
                ?>
                <tr>
                    <td scope="row"><?=$row["type_id"]?></td>
                    <td scope="row"><?=$row["type_name"]?></td>
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
