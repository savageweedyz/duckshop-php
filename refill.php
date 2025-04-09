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
    
<div class="card card-img-top mx-auto d-block p-3" style="width: 45%;">
  <img src="image/rateterm.png" class="card-img-top" alt="rateterm">
  <div class="card-body">
    <h5 class="card-title">กรุณากรอกเบอร์โทรศัพท์</h5>
    <form>
            <div class="col-md-00 text-align:center">
            <input type="text" class="form-control" placeholder="เบอร์โทร" aria-label="เบอร์โทร">
            </div>
            <br>
            <button type="button" class="btn btn-warning">
                ยืนยันเบอร์โทร
            </button>
            <br>
            <br>
            <h5 class="card-title">
                กรุณากรอกจำนวนเงินที่ต้องการเติมเงิน
            </h5>
            <form>
            <div class="col-md-00 text-align:center">
                <input type="text" class="form-control" placeholder="จำนวนเงินที่ต้องการเติม" aria-label="จำนวนเงิน">
            </div>
            <br>
            <div class="col-md-00 text-align:center">
            <h5 class="card-title">
                กรุณากรอกรหัส OTP
            </h5>
                <input type="text" class="form-control" placeholder="รหัส OTP">
             </div>
            </form>
            <br>
                 <button type="submit" class="btn btn-success">ทำรายการ</button>

<?php
mysqli_close($conn); //ปิดการเชื่อต่อฐานข้อมูล
?>
</body>