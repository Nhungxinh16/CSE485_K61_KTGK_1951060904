<?php
    require('templates/header.php');
    require("config/constants.php");
    if(isset($_POST["add"])){
        $name = $_POST["name"];
        $age = $_POST["age"];
        $type = $_POST["type"];
        $quantity = $_POST["quantity"];
        $sex = $_POST["sex"];
        $phone = $_POST["phone"];
        
        if($name == null || $age == null || $type == null || $quantity == null || $sex == null || $phone == null){
            $_SESSION["error"] = "Lỗi không nhập đầy đủ thông tin";
            header("location: error.php");
        }else{
            $sql = "INSERT INTO blood_recipient set reci_name = '$name', reci_age = '$age', reci_bgrp = '$type', reci_bqnty = '$quantity', reci_sex = '$sex', reci_phno = '$phone'";
            $result = mysqli_query($conn, $sql);
            if($result){
                $_SESSION["success"] = "Thêm thành công";
                header("location: index.php");
            }else{
                $_SESSION["error"] = "Lỗi không thêm được!";
                header("location: error.php");
            }
        }
    }
?>
    <div class="container">
        <h2 class="text-center" style="margin-top: 40px; margin-bottom:24px;">Thêm người nhận máu</h2>
        <form action="add.php" method = "POST">
            <div class="form-group">
                <label for="email">Tên người hiến máu:</label>
                <input type="text" class="form-control" id="email" placeholder="Nhập tên" name="name">
            </div>
            <div class="form-group">
                <label for="pwd">Tuổi:</label>
                <input type="number" class="form-control" id="pwd" placeholder="Nhập tuổi" name="age">
            </div>
            <div class="form-group">
                <label for="pwd">Nhóm máu cần nhận:</label>
                <input type="text" class="form-control" id="pwd" placeholder="Nhập nhóm máu" name="type">
            </div>
            <div class="form-group">
                <label for="pwd">số lượng máu cần nhận:</label>
                <input type="number" class="form-control" id="pwd" placeholder="Nhập số lượng máu" name="quantity">
            </div>
            <div class="form-group">
                <label for="pwd">Giới tính:</label>
                <input type="number" class="form-control" id="pwd" placeholder="Nhập giới tính (0 là nữ và 1 là nam)" name="sex">
            </div>
            <div class="form-group">
                <label for="pwd">Số điện thoại:</label>
                <input type="number" class="form-control" id="pwd" placeholder="Nhập số điện thoại" name="phone">
            </div>
            <button type="submit" class="btn btn-primary" style="margin-top: 16px;" name="add">Thêm</button>
        </form>
    </div>


<?php
    
?>




<?php
include('templates/footer.php')
?>