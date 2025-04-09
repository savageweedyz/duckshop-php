<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>รายการสั่งซื้อ</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="forms/style.css" rel="stylesheet">  
  <script src="js/bootstrap.bundle.min.js"></script>
</head>
<body>
  <div class="container mt-5">
    <h2>รายการสั่งซื้อ</h2>
    <table class="table">
      <thead>
        <tr>
          <th>Order ID</th>
          <th>ชื่อลูกค้า</th>
          <th>ที่อยู่</th>
          <th>โทรศัพท์</th>
          <th>Total Price</th>
        </tr>
      </thead>
      <tbody>
        <?php
          // เชื่อมต่อกับฐานข้อมูล
          $conn = mysqli_connect("localhost", "root", "", "dbdata");

          // เช็คการเชื่อมต่อ
          if($conn === false){
              die("ERROR: Could not connect. " . mysqli_connect_error());
          }

          // คิวรีข้อมูลจากตาราง tb_order
          $sql = "SELECT orderID, cus_name, address, telephone, total_price FROM tb_order";
          $result = mysqli_query($conn, $sql);

          // วนลูปแสดงข้อมูลในตาราง
          while($row = mysqli_fetch_array($result)){
              echo "<tr>";
              echo "<td>" . $row['orderID'] . "</td>";
              echo "<td>" . $row['cus_name'] . "</td>";
              echo "<td>" . $row['address'] . "</td>";
              echo "<td>" . $row['telephone'] . "</td>";
              echo "<td>" . $row['total_price'] . "</td>";
              echo "</tr>";
          }

          // ปิดการเชื่อมต่อฐานข้อมูล
          mysqli_close($conn);
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>