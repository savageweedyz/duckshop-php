<?php
session_start();
include 'admin\condb.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="forms/style.css" rel="stylesheet">  
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <style>
        /* Style the banner */
        .banner {
            background-color: #007bff;
            color: white;
            padding: 20px;
            text-align: center;
            position: relative;
            overflow: hidden;
            float: right;
            width: calc(100% - 250px);
        }

        .banner img {
            max-width: 100%;
            height: auto;
            display: block;
            float: left;
            margin-right: 20px;
        }
        /* Style the card */
        .card {
            margin-bottom: 20px;
        }
        .sidebar {
            background-color: #f8f9fa;
            padding: 20px;
            min-height: 100vh;
            float: left;
            width: 250px;
        }
        .carousel-item{
            height: 32rem;
            position: relative;
        }
    </style>
</head>
<body style="background-color:#566573;">
<div class="container-fluid"> <!-- Include the sidebar from menu11.php -->
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-3">
        <?php include 'menu1.php'; ?>
        </div>
        <!-- Carousel and Banner -->
        <div class="col-md-9 p-3 align-middle">
            <div class="row">
                <div class="col">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block mx-auto" style="width: 1050px;" src="image/Banner-lnw.png" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block mx-auto" style="width: 1050px;" src="image/b2.png" alt="Second slide">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row">
        <!-- Card View -->
        <div class="col-md-9 offset-md-3 mt-3 text-center">
        <h3><div style="background-color:#17202a"><div class="p-3 mb-2 text-white">สินค้าแนะนำ</div></h3>

            <div class="row">
                <div class="col-md-4 mb-3">
                    <h5 div style="background-color:#17202a"><div class="p-3 mb-2 text-white">
                        <img class="card-img-top mx-auto d-block" src="image/giftcard.jpg" style="width: 200px;" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Steam Gift-Card</h5>
                            <p class="card-text">Steam Gift-Card ฿150 - ฿3,000</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                <h5 div style="background-color:#17202a"><div class="p-3 mb-2 text-white">
                        <img class="card-img-top mx-auto d-block" src="image/roblox-gift.jpg" style="width: 185px;" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Roblox Gift-Card</h5>
                            <p class="card-text">Roblox Gift-Card $10 - $500</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                <h5 div style="background-color:#17202a"><div class="p-3 mb-2 text-white">
                        <img class="card-img-top mx-auto d-block" src="image/pubgm.png" style="width: 300px;" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">PUBG Mobile</h5>
                            <p class="card-text">UC ฿30 - ฿3,000</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
  
<?php
mysqli_close($conn); //ปิดการเชื่อต่อฐานข้อมูล
?>
</body>
</html>