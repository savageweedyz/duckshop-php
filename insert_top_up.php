<?php
include 'admin/condb.php';

     //รับค่าตัวแปรมาจากไฟล์ fr_top_up.php
    $top_id = $_POST['top_id'];
    $top_name = $_POST['top_name'];
    $pro_id=$_POST['pro_id'];
    $price=$_POST['price'];
    $amount=$_POST['amount'];
    
    // เช็คถ้าข้อมูลซ้ำ ให้ทำการอัพเดตจำนวนสินค้าในตาราง top_up แทนการเพิ่มสินค้าลงตาราง top_up
    $check = "select * from top_up  where top_id = '$top_id' ";
    $result1 = mysqli_query($conn,$check) or die (mysqli_error($conn,$check));
    $num=mysqli_num_rows($result1); 
    if($num > 0)
    {
    $sqlupdate ="UPDATE top_up set amount=amount + $amounts  WHERE top_id ='$top_id' ";
    mysqli_query($conn,$sqlupdate);
      //แสดงข้อความแจ้งเตือน แล้วแสดงข้อมูลหน้าเพจ fr_top_up.php
        echo "<script>";
        echo "alert('อัพเดตสต็อกเรียบร้อย!');";
        echo "window.location='show_top_up.php';";
        echo "</script>";

    }else{
        //อัพโหลดรูปภาพ
        if (is_uploaded_file($_FILES['file1']['tmp_name'])) {
            $new_image_name = 'pro_'.uniqid().".".pathinfo(basename($_FILES['file1']['name']),PATHINFO_EXTENSION);
            $image_upload_path = "./image/".$new_image_name;
            move_uploaded_file($_FILES['file1']['tmp_name'],$image_upload_path);
            } else {
            $new_image_name = "";
            }
              
    //คำสั่งเพิ่มข้อมูลลงในตาราง type
    $sql = "insert into top_up(top_id,top_name,pro_id,price,amount,top_pic) values('$top_id','$top_name','$pro_id','$price','$amount','$new_image_name')" ;
    $result = mysqli_query($conn, $sql);
    if($result) {
        echo "<script>alert('บันทึกข้อมูลเรียบร้อยแล้ว');</script>";
        echo "<script>window.location='fr_top_up.php';</script>";
        
    }else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        echo "<script>alert('ไม่สามารถบันทึกข้อมูลได้');</script>";
    }
}
    mysqli_close($conn);   //ปิดการเชื่อมต่อฐานข้อมูล
?>
