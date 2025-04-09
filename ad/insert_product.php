<?php
include 'admin/condb.php';

     //รับค่าตัวแปรมาจากไฟล์ fr_product.php
    $proid = $_POST['pro_id'];
    $proName = $_POST['pro_name'];
    
    // เช็คถ้าข้อมูลซ้ำ ให้ทำการอัพเดตจำนวนสินค้าในตาราง product แทนการเพิ่มสินค้าลงตาราง product
    $check = "select * from product  where pro_id = '$proid' ";
    $result1 = mysqli_query($conn,$check) or die (mysqli_error($conn,$check));
    $num=mysqli_num_rows($result1); 
    if($num > 0)
    {
    $sqlupdate ="UPDATE product set amount=amount + $amounts  WHERE pro_id ='$proid' ";
    mysqli_query($conn,$sqlupdate);
      //แสดงข้อความแจ้งเตือน แล้วแสดงข้อมูลหน้าเพจ fr_product.php
        echo "<script>";
        echo "alert('อัพเดตสต็อกเรียบร้อย!');";
        echo "window.location='show_product.php';";
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
    $sql = "insert into product(pro_id,pro_name,pro_img) values('$proid','$proName','$new_image_name')" ;
    $result = mysqli_query($conn, $sql);
    if($result) {
        echo "<script>alert('บันทึกข้อมูลเรียบร้อยแล้ว');</script>";
        echo "<script>window.location='fr_product.php';</script>";
        
    }else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        echo "<script>alert('ไม่สามารถบันทึกข้อมูลได้');</script>";
    }
}
    mysqli_close($conn);   //ปิดการเชื่อมต่อฐานข้อมูล
?>
