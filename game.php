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
    <title>เติมเกมผ่าน UID</title>
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
        <h3><div style="background-color:#17202a"><div class="p-3 mb-2 text-white">เติมเกมผ่าน UID</div></h3>
            <div class="container text-center">
                <div class="row row-cols-3 p-2">

                    <?php
                    //คำสั่งเลือกข้อมูลจากตาราง product ขึ้นมาแสดงผล
                    $sql = "SELECT * FROM product order by pro_id";
                    $result=mysqli_query($conn,$sql);
                    while($row=mysqli_fetch_array($result)){
                    ?>
                    
                    <div class="col">
                        <!-- Display product details here -->
                        <h5 div style="background-color:#17202a"><div class="p-3 mb-3">
                        <img src="image/<?=$row['pro_img']?>" class="rounded mx-auto d-block" width = "200px" height = "250px"><br>
                            <div class="card-body">
                            <a href="#" onclick="chooseProduct('<?=$row['pro_id']?>')" class="btn btn-info"><?=$row["pro_name"]?></a>
                            </div>
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
    function chooseProduct(proId){
            if (proId === '001') {
                window.location.href = "sh_product_detail.php?id=" + proId;
            } else if (proId === '002') {
                window.location.href = "sh_product_detail_honkai.php?id=" + proId;
            } else if (proId === '003') {
                window.location.href = "sh_product_detail_pubgm.php?id=" + proId;
            } else if (proId === '004') {
                window.location.href = "sh_product_detail_apex.php?id=" +proId;
            }
    }

 </script>
</body>
</html>