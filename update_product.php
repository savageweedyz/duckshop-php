<?php

include 'condb.php';
$proid=$_POST['pro_id'];
$name=$_POST['pro_name'];
$image=$_POST['txtimg'];


if (is_uploaded_file($_FILES['file1']['tmp_name'])) { 
$new_image_name = 'pro_'.uniqid().".".pathinfo(basename($_FILES['file1']['name']), PATHINFO_EXTENSION); 
$image_upload_path = "./image/".$new_image_name;
move_uploaded_file($_FILES['file1']['tmp_name'],$image_upload_path); 
} else {
$new_image_name = "$image";
}

// คําส่ังแก้ไข้ข้อมูลลงในตาราง
$sql = "update product set
pro_id='$proid',
pro_name='$name',
pro_img='$new_image_name'
where pro_id = '$proid' ";
$result = mysqli_query($conn, $sql);
if($result) {
echo "<script>alert('แก้ไขข้อมูลเรียบร้อยแล้ว'); </script>";
echo "<script>window.location='show_product.php';</script>"; } else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
echo "<script>alert('ไม่สามารถแก้ไขข้อมูลได้');</script>";
}
mysqli_close($conn);
?>