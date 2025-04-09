<?php

include 'condb.php';
$posname=$_POST['pos_name'];
$posid=$_POST['pos_id'];

// คําส่ังแก้ไข้ข้อมูลลงในตาราง
$sql = "update job_position set
pos_name='$posname'
where pos_id = '$posid'";
$result = mysqli_query($conn, $sql);
if($result) {
echo "<script>alert('แก้ไขข้อมูลเรียบร้อยแล้ว'); </script>";
echo "<script>window.location='show_job.php';</script>"; } else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
echo "<script>alert('ไม่สามารถแก้ไขข้อมูลได้');</script>";
}
mysqli_close($conn);
?>