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
        .form-group {
            margin-bottom: 20px;
            padding: 10px;
        }
        input[type="text"], input[type="password"], input[type="number"], input[type="comment"] {
            width: 100%;
            padding: 10px;
        }
        label {
            display: block;
            margin-bottom: 2.5px;
        }
        select {
            width: 100%;
            padding: 10px;
        }
        textarea {
            width: 100%;
            padding: 10px;
        }
        input[type="submit"] {
            background-color: blue;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="reset"] {
            background-color: red;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">All Form with PHP 2026</h1>
    <hr>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
        <div class="form-group">
            <label for="name">ชื่อ-นามสกุล</label>
            <input type="text" name="name" id="name" class="form-control">
            <br><br>
        </div>
        <div class="form-group">
            <label for="password">รหัสผ่าน</label>
            <input type="password" name="password" id="password" class="form-control">
            <br><br>
        </div>
        <div class="form-group">
            <label for="age">อายุ</label>
            <input type="number" name="age" id="age" class="form-control">
            <br><br>
        </div>
        <div class="form-group">
            <label for="gender">เพศ</label>
            <input type="radio" name="gender" id="gender" value="ชาย">ชาย
            <input type="radio" name="gender" id="gender" value="หญิง">หญิง
            <input type="radio" name="gender" id="gender" value="LGBTQ+">LGBTQ+
        </div>
        <div class="form-group">
            <label for="planguage">ภาษาโปรแกรมที่ชอบ</label>
            <input type="checkbox" name="planguage[]" value="C">C
            <input type="checkbox" name="planguage[]" value="Java">Java
            <input type="checkbox" name="planguage[]" value="Python">Python
            <input type="checkbox" name="planguage[]" value="PHP">PHP
        </div>
        <div class="form-group">
            <label for="food">อาหารที่ชอบ</label>
            <input type="checkbox" name="food[]" value="KFC">KFC
            <input type="checkbox" name="food[]" value="Pizza">Pizza
            <input type="checkbox" name="food[]" value="Donut">Donut
            <input type="checkbox" name="food[]" value="Burger">Burger
        </div>
        <div class="form-group">
            <label for="country">ประเทศที่ชอบ</label>
            <select name="country" id="country">
                <option value="Thailand">ไทย</option>
                <option value="Japan">ญี่ปุ่น</option>
                <option value="America">สหรัฐอเมริกา</option>
                <option value="Canada">แคนาดา</option>
                <option value="Korea">เกาหลี</option>
                <option value="China">จีน</option>
            </select>
        </div>
        <div class="form-group">
            <!-- favourite province listbox -->
            <label for="province">จังหวัดที่ชอบ</label>
            <select name="province" id="province" size="3">
                <option value="Bangkok">กรุงเทพมหานคร</option>
                <option value="Nonthaburi">นนทบุรี</option>
                <option value="Pathumthani">ปทุมธานี</option>
                <option value="Nakhon Pathom">นครปฐม</option>
            </select>
        </div>
        <div class="form-group">
            <label for="birthdate">วันที่เกิด</label>
            <input type="date" name="birthdate" id="birthdate">
        </div>
        <div class="form-group">
            <label for="likelevel">ระดับความชอบ</label>
            0<input type="range" name="likelevel" id="likelevel" min="1" max="100">100
        </div>
        <div class="form-group">
            <label for="comment">ความคิดเห็น</label>
            <textarea name="comment" id="comment" rows="5"></textarea>
        </div>
        <div class="form-group">
            <input type="submit" value="ส่งข้อมูล">
            <input type="reset" value="ล้างข้อมูล">
        </div>
    </form>
    <hr>
    <!-- display result from form that get from this file itself -->
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        ?>
        <div>
            <strong>ชื่อ-สกุล:</strong> <?php echo empty($_POST["name"]) ? "-" : $_POST["name"]; ?>
        </div>
        <div>
            <strong>รหัสผ่าน:</strong> <?php echo empty($_POST["password"]) ? "-" : $_POST["password"]; ?>
        </div>
        <div>
            <strong>อายุ:</strong> <?php echo empty($_POST["age"]) ? "-" : $_POST["age"]; ?>
        </div>
        <div>
            <strong>เพศ:</strong> <?php echo empty($_POST["gender"]) ? "-" : $_POST["gender"]; ?>
        </div>
        <div>
            <strong>ภาษาโปรแกรมที่ชอบ:</strong> <?php echo isset($_POST["planguage"]) ? implode(", ", $_POST["planguage"]) : "-"; ?>
        </div>
        <div>
            <strong>อาหารที่ชอบ:</strong> <?php echo isset($_POST["food"]) ? implode(", ", $_POST["food"]) : "-"; ?>
        </div>
        <div>
            <strong>ประเทศที่ชอบ:</strong> <?php echo empty($_POST["country"]) ? "-" : $_POST["country"]; ?>
        </div>
        <div>
            <strong>จังหวัดที่ชอบ:</strong> <?php echo empty($_POST["province"]) ? "-" : $_POST["province"]; ?>
        </div>
        <div>
            <strong>วันที่เกิด:</strong> <?php echo empty($_POST["birthdate"]) ? "-" : $_POST["birthdate"]; ?>
        </div>
        <div>
            <strong>ระดับความชอบ:</strong> <?php echo empty($_POST["likelevel"]) ? "-" : $_POST["likelevel"]; ?>
        </div>
        <div>
            <strong>ความคิดเห็น:</strong> <?php echo empty($_POST["comment"]) ? "-" : $_POST["comment"]; ?>
        </div>
        <?php
    }
    ?>
</body>
</html>