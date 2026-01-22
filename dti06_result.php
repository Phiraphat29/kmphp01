<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            padding: 40px;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Result Data Form with PHP 2026 (DTI-06)</h1>
    <hr>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        ?>
        <div>
            <strong>ชื่อ-สกุล:</strong> <?php echo empty($_GET["name"]) ? "-" : $_GET["name"]; ?>
        </div>
        <div>
            <strong>รหัสผ่าน:</strong> <?php echo empty($_GET["password"]) ? "-" : $_GET["password"]; ?>
        </div>
        <div>
            <strong>อายุ:</strong> <?php echo empty($_GET["age"]) ? "-" : $_GET["age"]; ?>
        </div>
        <div>
            <strong>เพศ:</strong> <?php echo empty($_GET["gender"]) ? "-" : $_GET["gender"]; ?>
        </div>
        <div>
            <strong>ภาษาโปรแกรมที่ชอบ:</strong> <?php echo isset($_GET["planguage"]) ? implode(", ", $_GET["planguage"]) : "-"; ?>
        </div>
        <div>
            <strong>อาหารที่ชอบ:</strong> <?php echo isset($_GET["food"]) ? implode(", ", $_GET["food"]) : "-"; ?>
        </div>
        <div>
            <strong>ประเทศที่ชอบ:</strong> <?php echo empty($_GET["country"]) ? "-" : $_GET["country"]; ?>
        </div>
        <div>
            <strong>จังหวัดที่ชอบ:</strong> <?php echo empty($_GET["province"]) ? "-" : $_GET["province"]; ?>
        </div>
        <div>
            <strong>วันที่เกิด:</strong> <?php echo empty($_GET["birthdate"]) ? "-" : $_GET["birthdate"]; ?>
        </div>
        <div>
            <strong>ระดับความชอบ:</strong> <?php echo empty($_GET["likelevel"]) ? "-" : $_GET["likelevel"]; ?>
        </div>
        <div>
            <strong>ความคิดเห็น:</strong> <?php echo empty($_GET["comment"]) ? "-" : $_GET["comment"]; ?>
        </div>
        <?php
    } else {
        echo "ไม่สามารถประมวลผลข้อมูลได้กรุณาลองใหม่";
    }
    ?>
</body>
</html>
