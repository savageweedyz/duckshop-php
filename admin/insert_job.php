<?php
include 'condb.php';

    $jobName = $_POST['pos_name'];
    $jobID = $_POST['pos_id'];
              
    $sql = "insert into job_position(pos_id,pos_name) values('$jobID','$jobName')" ;
    $result = mysqli_query($conn, $sql);
    if($result) {
        echo "<script>alert('บันทึกข้อมูลเรียบร้อยแล้ว');</script>";
        echo "<script>window.location='fr_job.php';</script>";
        
    }else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        echo "<script>alert('ไม่สามารถบันทึกข้อมูลได้');</script>";
    }
    mysqli_close($conn);   //ปิดการเชื่อมต่อฐานข้อมูล
?>