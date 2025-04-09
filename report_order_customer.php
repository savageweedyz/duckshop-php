<?php
include './admin/condb.php';
session_start();
if(!isset($_SESSION["cusid"]))
{
$show=header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
 <link href = "css/bootstrap.min.css" rel = "stylesheet">
 <script src="js/bootstrap.bundle.min.js" ></script></head>
<body>
<?php
include 'menu1.php';
?>
 <div class = "container">
 <div class = "alert alert-info h4 text-center mt-4" role="alert"> รายงานการสั่งซื้อ </div>
 <div class = "text-end">
</div>
 <table class="table table-bordered">
 <thead>
<tr>
    <th>เลขใบสั่งซื้อ</th>
    <th>เวลา</th>
    <th>ชื่อลูกค้า</th>
    <th>ที่อยู่</th>
    <th>เบอร์โทร</th>
    <th>ราคารวมสุทธิ</th>
    <th>สถานะ</th>
    <th>รายละเอียดสินค้า</th>


</tr>
</thead>

<?php
//คำสั่งเลือกข้อมูลจากตาราง product ขึ้นมาแสดงผล
$cus_name=$_SESSION["cusname"] ." " . $_SESSION["cuslastName"];

$sql = "SELECT * FROM tb_order where cus_name='$cus_name' ";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result)){
    $status = $row['order_status'];

?>

<tr>
    <td> <?=$row['orderID']?> </td>
    <td> <?=$row['reg_date']?> </td>
    <td> <?=$row['cus_name']?> </td>
    <td> <?=$row['address']?> </td>
    <td> <?=$row['telephone']?> </td>
    <td> <?=$row['total_price']?> </td>

    <td> 
        <?php
        if ($status== '1'){
            echo "<b style='color:red'> ยังไม่ชำระเงิน </b> ";
        } else if ( $status== '2'){
            echo "<b style='color:blue'> ชำระเงินแล้ว </b> ";
        } else if ( $status== '0'){
            echo "<b style='color:purple'> ยกเลิกการสั่งซื้อ </b>";
        }
        ?>
    </td>
    <td><a class="btn btn-warning mb-4" href="admin/order_detail.php?id=<?=$row["orderID"]?>" role="button">รายละเอียดสินค้า</a></td>
    </tr>
    <?php
    }
    mysqli_close($conn); //ปิดการเชื่อต่อฐานข้อมูล
    ?>
    </table>
    </div>
    </body>
    </html>