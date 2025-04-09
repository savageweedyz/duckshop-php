<?php

include 'condb.php';
$depname=$_POST['depName'];
$depid=$_POST['dep_id'];

// คําส่ังแก้ไข้ข้อมูลลงในตาราง
$sql = "update department set
depName='$depname'
where dep_id = '$depid'";
$result = mysqli_query($conn, $sql);
if($result) {
echo "<script>alert('แก้ไขข้อมูลเรียบร้อยแล้ว'); </script>";
echo "<script>window.location='show_department.php';</script>"; } else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
echo "<script>alert('ไม่สามารถแก้ไขข้อมูลได้');</script>";
}
mysqli_close($conn);
?>