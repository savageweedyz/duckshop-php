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
  <img src="image/rr.png" class="card-img-top" alt="rateterm">
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
            <option value="1">175 ROBUX Giftcard 200 บาท</option>
            <option value="2">230 ROBUX Giftcard 260 บาท</option>
            <option value="3">300 ROBUX Giftcard 340 บาท</option>
            <option value="4">325 ROBUX Giftcard 360 บาท</option>
            <option value="5">350 ROBUX Giftcard 390 บาท</option>
            <option value="6">580 ROBUX Giftcard 640 บาท</option>
            <option value="7">750 ROBUX Giftcard 825 บาท</option>

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