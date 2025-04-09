<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
 body {
  margin: 0;
  font-family: "Lato", sans-serif;
}

.sidebar {
  margin: 0;
  padding: 0;
  width: 400px;
  background-color: #17202A;
  position: fixed;
  height: auto;
  overflow: auto;
}

.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}
 
.sidebar a.active {
  background-color: #F4D03F;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: #F4D03F;
  color: white;
}

div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
</style>
</head>

</style>
</head>
<body style="background-color: #566573;">
<div class="sidebar">
<a href="../jectjeng/index.php" class="text-center">
    <img src="image/d.png" style="width:auto; height: 90px;" alt="DUCK SHOP" href="./jectjeng/index.php">
      <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
    </a>
    <hr>


    <ul class="nav nav-pills flex-column mb-auto">
      <?php if (!isset($_SESSION["cusname"])): ?>
      <li class="nav-item">
      <a href="../jectjeng/login.php" class="nav-link text-white">
        <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
        <img src="image/user.png" style="width:auto; height: 30px;" alt="DUCK SHOP" href="index.php/jectjeng/index.php">
        เข้าสู่ระบบ
      </a>
      </li>
      <?php else: ?>
        <li class="nav-item">
        <div class="container">
        <div class="d-flex align-items-center justify-content-between"> <!-- Use flexbox to align items horizontally -->
                    <div class="d-flex align-items-center mr-3"> <!-- Another flex container for name and last name -->
                        <div class="mr-2 text-white">
                          <?= $_SESSION["cusname"] ?> 
                          <?= $_SESSION["cuslastName"] ?>
                        </div>
                    </div>
                    <a href="../jectjeng/logout.php">
                  <img src="image/logout.png" style="width:30; height: 30px;" alt="DUCK SHOP" href="./jectjeng/logout.php">
                    </a>
                </div>
        </li>
        <?php endif; ?>
    </ul>
    <br>

    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="../jectjeng/index.php" class="nav-link text-white" aria-current="page">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
          <img src="image/home.png" style="width:auto; height: 30px;" alt="DUCK SHOP" href="index.php/jectjeng/index.php">
          หน้าหลัก
        </a>
      </li>
      <li>
        <a href="../jectjeng/refill.php" class="nav-link text-white">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
          <img src="image/cash.png" style="width:auto; height: 30px;" alt="DUCK SHOP" href="../jectjeng/refill.php">
          เติมเงิน
        </a>
      </li>
      <li>
        <a href="../jectjeng/game.php" class="nav-link text-white">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
          <img src="image/console.png" style="width:auto; height: 30px;" alt="DUCK SHOP" href="index.php/jectjeng/index.php">
          เติมเกม
        </a>
      </li>
      <li>
        <a href="../jectjeng/gift.php" class="nav-link text-white">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
          <img src="image/credit-card.png" style="width:auto; height: 30px;" alt="DUCK SHOP" href="index.php/jectjeng/index.php">
          Gift Card
        </a>
      </li>
      <li>
      </li>
    </ul>
    <img src="image/siidebar-bg.png" style="width: 400px; height: 460px;" alt="DUCK SHOP">
    <hr>
  </div>
</body>
</html>