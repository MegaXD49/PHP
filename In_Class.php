<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>การหาเดือนที่มี 30 วันและ 31 วัน</title>
</head>
<body>

<h2>กิจกรรมในชั้นเรียน</h2>
<p>ให้นักเรียนเขียนคำสั่ง switch case การหาเดือนที่มี 31 วัน และเดือนที่มี 30 วัน ตัวอย่างดังรูป</p>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="month">เดือน:</label>
    <input type="text" id="month" name="month" required><br><br>
    <input type="submit" value="ตกลง">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $month = $_POST['month'];
    
    switch ($month) {
        case "มกราคม":
        case "มีนาคม":
        case "พฤษภาคม":
        case "กรกฎาคม":
        case "สิงหาคม":
        case "ตุลาคม":
        case "ธันวาคม":
            echo "เดือน $month มี 31 วัน";
            break;
        case "เมษายน":
        case "มิถุนายน":
        case "กันยายน":
        case "พฤศจิกายน":
            echo "เดือน $month มี 30 วัน";
            break;
        case "กุมภาพันธ์":
            echo "เดือน $month มี 28 หรือ 29 วัน";
            break;
        default:
            echo "กรุณาใส่ชื่อเดือนให้ถูกต้อง";
    }
}
?>

</body>
</html>
