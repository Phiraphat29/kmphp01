<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if ( empty($_GET["num1"] == true) || empty($_GET["num2"] == true) ) {
                echo "ไม่สามารถตำนวณได้ กรุณาป้อนจำนวนเงินและจำนวนคน ห้ามเป็นค่าว่าง";
                echo "<script>setTimeout(function() { window.location.href = 'dti05.php'; }, 3000);</script>";
            } else if (intval($_GET["num1"]) == 0 || intval($_GET["num2"]) == 0) {
                echo "ไม่สามารถตำนวณได้ กรุณาป้อนจำนวนเงินและจำนวนคน ห้ามเป็น 0";
                echo "<script>setTimeout(function() { window.location.href = 'dti05.php'; }, 3000);</script>";
            } else {
                $result = intval($_GET["num1"]) / intval($_GET["num2"]);
                echo "เงิน " . $_GET["num1"] . " บาท <br>";
                echo "คน " . $_GET["num2"] . " คน <br>";
                echo "จำนวนเงินที่แต่ละคนต้องจ่ายคือ " . $result;
        }
    ?>
</body>
</html>