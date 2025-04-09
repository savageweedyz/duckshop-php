<?php
session_start();
include 'admin\condb.php';
?>

<!DOCTYPE html>
<html lang="th">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="forms/style.css" rel="stylesheet">  
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
</head>
<body style="background-color:#566573;">
<div class="container-fluid"> <!-- Include the sidebar from menu11.php -->
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-3">
        <?php include 'menu1.php'; ?>
        </div>

        <div class="container">
            <div class="row">
                <?php
        $ids=$_GET['id'];
            $sql = "SELECT * FROM product where pro_id='$ids'";
            $result=mysqli_query($conn,$sql);
            ($row=mysqli_fetch_array($result));
            ?>

                <div class="col-md-5">

                    <div class="text-end">
                        <img src="image/<?=$row['pro_img']?>" width="250px" height="250px"
                            class=" p-2 mb-2 border">
                    </div>

                </div>

                <div class="col-md-6 ">
                    ID:<?=$row['pro_id']?> <br>
                    ชื่อสินค้า: <h5 class="text-primary"> <?=$row['pro_name']?> </h5>

                </div>
                <?php
                    mysqli_close($conn);
                 ?>