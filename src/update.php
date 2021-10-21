<?php
    require('templates/header.php');
    require("config/constants.php");
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
        $_SESSION["error"] = "Lỗi không thể update người nhận";
        header("location: error.php");
    }
?>
    <div class="container">
        <h2 class="text-center" style="margin-top: 40px; margin-bottom:24px;">Sửa người nhận máu</h2>
        <form action="add.php" method = "POST">
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
            <button type="submit" class="btn btn-primary" style="margin-top: 16px;" name="add">Thêm</button>
        </form>
    </div>


<?php
    
?>




<?php
include('templates/footer.php')
?>