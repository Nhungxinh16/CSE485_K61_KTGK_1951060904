<?php
    require('templates/header.php');
    require("config/constants.php");
    if(isset($_GET["id"])){
        $id = $_GET["id"];
        if($id == NULL){
            $_SESSION["error"] = "Lỗi không thể xem chi tiết người nhận máu";
            header("location: error.php");
        }
        $sql = "select * from blood_recipient where reci_id = $id";
        $query = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($query);

    }else{
        $_SESSION["error"] = "Lỗi không thể xem chi tiết người nhận máu";
        header("location: error.php");
    }
    
?>
    <div class="container">
        <h2 class="text-center" style="margin-top: 40px; margin-bottom:24px;">Chi tiết người nhận máu</h2>
        <div class="row">
            <div class="col-4">Id người nhận máu: </div>
            <div class="col-8"><?php echo $row["reci_id"] ?></div>
        </div>
        <div class="row">
            <div class="col-4">Tên người nhận máu: </div>
            <div class="col-8"><?php echo $row["reci_name"] ?></div>
        </div>
        <div class="row">
            <div class="col-4">Tuổi người nhận máu: </div>
            <div class="col-8"><?php echo $row["reci_age"] ?></div>
        </div>
        <div class="row">
            <div class="col-4">Nhóm máu: </div>
            <div class="col-8"><?php echo $row["reci_bgrp"] ?></div>
        </div>
        <div class="row">
            <div class="col-4">Số lượng máu cần nhận: </div>
            <div class="col-8"><?php echo $row["reci_bqnty"] ?>mL</div>
        </div>
        <div class="row">
            <div class="col-4">Giới tính: </div>
            <div class="col-8"><?php 
                if($row["reci_age"] == 0){
                    echo "Nữ";
                }else{
                    echo "Nam";
                }
            ?></div>
        </div>
        <div class="row">
            <div class="col-4">Ngày đăng kí nhận máu: </div>
            <div class="col-8"><?php echo $row["reci_reg_date"] ?></div>
        </div>
        <div class="row">
            <div class="col-4">Số điện thoại: </div>
            <div class="col-8"><?php echo $row["reci_phno"] ?></div>
        </div>
        <button type="button" class="btn btn-primary" style="margin-bottom: 12px"><a href="index.php" class="text-white">Quay lại</a></button>
    </div>
<?php
    
?>




<?php
include('templates/footer.php')
?>