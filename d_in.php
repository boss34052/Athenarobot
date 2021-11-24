<?php 
echo "<pre>";
print_r($_POST);
echo "</pre>";
//exit();
?>

<?php 
session_start();
include ('server2.php'); 
 
 
 
 
//สร้างตัวแปร
if(isset($_POST['save'])) 
{
    $d_1 = $_POST['d_1'];
    $d_2 = $_POST['d_2'];
    $d_3 = $_POST['d_3'];
    $d_4 = $_POST['d_4'];
    $d_5 = $_POST['d_5'];
    $d_6 = $_POST['d_6'];
    $d_7 = $_POST['d_7'];
    $d_8 = $_POST['d_8'];

    $query = "INSERT INTO date_tbl 
    (d_1, d_2, d_3, d_4, d_5, d_6, d_7, d_8)
    VALUES
    ('$d_1', '$d_2', '$d_3', '$d_4', '$d_5', '$d_6', '$d_7', '$d_8')";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Successfully";
        header("Location: service.php");
    }
    else{
        $_SESSION['status'] = "Failed";
        header("Location: service.php");
    }
}
 
 
 
//เพิ่มข้อมูล
/*
$sql_date = " INSERT INTO date_tbl
(d_1, d_2, d_3, d_4, d_5, d_6, d_7, d_8)
VALUES
('$d_1', '$d_2', '$d_3', '$d_4', '$d_5', '$d_6', '$d_7', '$d_8')";
 */
 
 
 
$result = mysqli_query($conn, $sql_date) or die ("Error in query: $sql_date" . mysqli_error());
//ปิดการเชื่อมต่อ database
mysqli_close($conn);
//ถ้าสำเร็จให้ขึ้นอะไร
if ($result){
echo "<script type='text/javascript'>";
echo"alert('Success');";
echo"window.location = 'service.php';";
echo "</script>";
}
else {
//กำหนดเงื่อนไขว่าถ้าไม่สำเร็จให้ขึ้นข้อความและกลับไปหน้าเพิ่ม		
echo "<script type='text/javascript'>";
echo "alert('error!');";
echo"window.location = 'service.php'; ";
echo"</script>";
}
?>