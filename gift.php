<?php
include 'admin/condb.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="forms/style.css" rel="stylesheet">  
    <script src="js/bootstrap.bundle.min.js"></script>
    <title>Gift Card</title>
    <style>
        /* Custom Styles */
        .card {
            max-width: 18rem; /* Adjust the maximum width of the card */
        }
    </style>
</head>
<body style="background-color:#566573;">
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-3">
            <?php include 'menu1.php'; ?>
        </div>
        <!-- Products --><div class="row">
        <!-- Card View -->
        <div class="col-md-9 offset-md-3 mt-3 text-center">
        <h3><div style="background-color:#17202a"><div class="p-3 mb-2 text-white">Gift Card</div></h3>
            <div class="container text-center">
                <div class="row row-cols-3 p-2">

                    <?php
                    //คำสั่งเลือกข้อมูลจากตาราง product ขึ้นมาแสดงผล
                    $sql = "SELECT * FROM giftcard order by gift_id";
                    $result=mysqli_query($conn,$sql);
                    while($row=mysqli_fetch_array($result)){
                    ?>
                    
                    <div class="col">
                        <!-- Display product details here -->
                        <h5 div style="background-color:#17202a"><div class="p-3 mb-3">
                        <img src="image/<?=$row['gift_img']?>" class="rounded mx-auto d-block" width = "200px" height = "290px"><br>
                            <div class="card-body">
                            <a href="#" onclick="chooseProduct('<?=$row['gift_id']?>')" class="btn btn-info"><?=$row["gift_name"]?></a>                            </div>
                        </div>
                    </div>
                    <?php
                    }
                    mysqli_close($conn); //ปิดการเชื่อต่อฐานข้อมูล
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function chooseProduct(giftId){
            if (giftId === '001') {
                window.location.href = "sh_gift_steam.php?id=" + giftId;
            } else if (giftId === '002') {
                window.location.href = "sh_gift_roblox.php?id=" + giftId;
            }
    }

 </script>
</body>
</html>