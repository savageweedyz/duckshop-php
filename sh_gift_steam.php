<?php
include 'admin\condb.php';
session_start();
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
    <title>รายละเอียดการเติม</title>
</head>

<body>        
    <div class="col-md-90">
    <?php include 'menu1.php' ?>
    <br><br>

    <body style="background-color:#566573;">
<div class="container-fluid"> <!-- Include the sidebar from menu11.php -->
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-30">
        </div>
    
        <div class="container">
            <div class="row">
                <?php
        $ids=$_GET['id'];
            $sql = "SELECT * FROM giftcard where gift_id='$ids'";
            $result=mysqli_query($conn,$sql);
            ($row=mysqli_fetch_array($result));
            ?>
    
    <div class="card card-img-top mx-auto d-block p-3" style="width: 45%;">
  <img src="image/rs.png" class="card-img-top" alt="rateterm">
  <div class="card-body">
    <h5 class="card-title">เลือกแพ็คเกจที่ต้องการ</h5>
    <form>
        <div class="col-md-00 text-align:center"> 

            <style>
            select:invalid { color: black; }
            </style>
    <form>
        <select class="form-select" aria-label="Default select example">
            <option selected>เลือกแพ็คเกจที่ต้องการ</option>
            <option value="1">50 Steam Giftcard 49 บาท</option>
            <option value="2">75 Steam Giftcard 74 บาท</option>
            <option value="3">100 Steam Giftcard 98 บาท</option>
            <option value="4">200 Steam Giftcard 196 บาท</option>
            <option value="5">350 Steam Giftcard 343 บาท</option>
            <option value="6">750 Steam Giftcard 735 บาท</option>
            <option value="7">1000 Steam Giftcard 980 บาท</option>
            <option value="7">1500 Steam Giftcard 1470 บาท</option>

        </select>
    </form>
            <br>

                <div class="col-md-6 ">
                    <a href="order.php?id=<?=$row['gift_id']?>" class="btn btn-outline-success">Add Cart</a>
                </div>
                <?php
            
            mysqli_close($conn);
            ?>



            </div>
        </div>
    </body>

</html>