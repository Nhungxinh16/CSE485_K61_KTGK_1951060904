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
        $id = $_GET["id"];
        if($name == null || $age == null || $type == null || $quantity == null || $sex == null || $phone == null){
            $_SESSION["error"] = "Lỗi không nhập đầy đủ thông tin";
            header("location: error.php");
        }else{
            echo $id;
            $sql = "update blood_recipient set reci_name = '$name', reci_age = '$age', reci_bgrp = '$type', reci_bqnty = '$quantity', reci_sex = '$sex', reci_phno = '$phone' where reci_id = $id";
            $result = mysqli_query($conn, $sql);
            var_dump($result);
            if($result){
                $_SESSION["success"] = "Cập nhật thành công";
                header("location: index.php");
            }else{
                $_SESSION["error"] = "Lỗi không cập nhật được được!";
                header("location: error.php");
            }
        }
    }
    if(isset($_GET["id"])){
        $id = $_GET["id"];
        if($id == NULL){
            $_SESSION["error"] = "Lỗi không thể update người nhận";
            header("location: error.php");
        }
        $sql = "select * from blood_recipient where reci_id = $id";
        $query = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($query);

    }else{
        $_SESSION["error"] = "Lỗi không thể cập nhật người nhận";
        header("location: error.php");
    }
?>
    <div class="container">
        <h2 class="text-center" style="margin-top: 40px; margin-bottom:24px;">Thêm người nhận máu</h2>
        <form action="update.php?id=<?php echo $row["reci_id"] ?>" method = "POST">
            <div class="form-group">
                <label for="email">Tên người hiến máu:</label>
                <input type="text" class="form-control" id="email" placeholder="Nhập tên" name="name" value = "<?php echo $row["reci_name"]?>">
            </div>
            <div class="form-group">
                <label for="pwd">Tuổi:</label>
                <input type="text" class="form-control" id="email" placeholder="Nhập tuổi" name="age" value = "<?php echo $row["reci_age"]?>">
            </div>
            <div class="form-group">
                <label for="pwd">Nhóm máu cần nhận:</label>
                <input type="text" class="form-control" id="pwd" placeholder="Nhập nhóm máu" name="type" value = "<?php echo $row["reci_bgrp"]?>">
            </div>
            <div class="form-group">
                <label for="pwd">số lượng máu cần nhận:</label>
                <input type="number" class="form-control" id="pwd" placeholder="Nhập số lượng máu" name="quantity" value = "<?php echo $row["reci_bqnty"]?>">
            </div>
            <div class="form-group">
                <label for="pwd">Giới tính:</label>
                <input type="number" class="form-control" id="pwd" placeholder="Nhập giới tính (0 là nữ và 1 là nam)" name="sex" value = "<?php echo $row["reci_sex"]?>">
            </div>
            <div class="form-group">
                <label for="pwd">Số điện thoại:</label>
                <input type="number" class="form-control" id="pwd" placeholder="Nhập số điện thoại" name="phone" value = "<?php echo $row["reci_phno"]?>">
            </div>
            <button type="submit" class="btn btn-primary" style="margin-top: 16px;" name="add">Sửa</button>
        </form>
    </div>


<?php
    
?>




<?php
include('templates/footer.php')
?>