<?php
include 'condb.php';
$id=$_GET['id'];
$sql="DELETE FROM top_up WHERE top_id='$id' "; 
if(mysqli_query($conn,$sql)){
echo"<script>alert('ลบข้อมูลเรียบร้อย');</script>";
echo "<script>window.location='show_top_up.php';</script>"; 
}else{
echo "Error : " . $sql . "<br>" . mysqli_error($conn);
echo"<script>alert('ไม่สามารถลบข้อมูลได'้);</script>"; }
mysqli_close($conn);
?>