<?php
include 'condb.php';

     //รับค่าตัวแปรมาจากไฟล์ fr_product.php
    $empid = $_POST['emp_id'];
    $empName = $_POST['emp_name'];
    $empLast = $_POST['emp_lastname'];
    $telephone = $_POST['emp_telephone'];
    $posid = $_POST['pos_id'];
    // เช็คถ้าข้อมูลซ้ำ ให้ทำการอัพเดตจำนวนสินค้าในตาราง product แทนการเพิ่มสินค้าลงตาราง product
    $check = "select * from employee  where emp_id = '$empid' ";
    $result1 = mysqli_query($conn,$check) or die (mysqli_error($conn,$check));
    $num=mysqli_num_rows($result1); 
        //อัพโหลดรูปภาพ
        if (is_uploaded_file($_FILES['file1']['tmp_name'])) {
            $new_image_name = 'pro_'.uniqid().".".pathinfo(basename($_FILES['file1']['name']),PATHINFO_EXTENSION);
            $image_upload_path = "./image/".$new_image_name;
            move_uploaded_file($_FILES['file1']['tmp_name'],$image_upload_path);
            } else {
            $new_image_name = "";
            }
              
    //คำสั่งเพิ่มข้อมูลลงในตาราง type
    $sql = "insert into employee(emp_id,emp_name,emp_lastname,emp_telephone,pos_id,emp_img) values('$empid','$empName','$empLast','$telephone','$posid','$new_image_name')" ;
    $result = mysqli_query($conn, $sql);
    if($result) {
        echo "<script>alert('บันทึกข้อมูลเรียบร้อยแล้ว');</script>";
        echo "<script>window.location='fr_employee.php';</script>";
        
    }else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        echo "<script>alert('ไม่สามารถบันทึกข้อมูลได้');</script>";
    }

    mysqli_close($conn);   //ปิดการเชื่อมต่อฐานข้อมูล
?>
