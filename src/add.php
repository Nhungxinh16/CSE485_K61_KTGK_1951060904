<?php
    require('templates/header.php');
    require("config/constants.php");
?>
    <div class="container">
        <h2 class="text-center" style="margin-top: 40px; margin-bottom:24px;">Thêm người nhận máu</h2>
        <form action="add.php" method = "POST">
            <div class="form-group">
                <label for="email">Tên người hiến máu:</label>
                <input type="email" class="form-control" id="email" placeholder="Nhập tên" name="email">
            </div>
            <div class="form-group">
                <label for="pwd">Tuổi:</label>
                <input type="number" class="form-control" id="pwd" placeholder="Nhập tuổi" name="pwd">
            </div>
            <div class="form-group">
                <label for="pwd">Nhóm máu cần nhận:</label>
                <input type="text" class="form-control" id="pwd" placeholder="Nhập nhóm máu" name="pwd">
            </div>
            <div class="form-group">
                <label for="pwd">số lượng máu cần nhận:</label>
                <input type="number" class="form-control" id="pwd" placeholder="Nhập số lượng máu" name="pwd">
            </div>
            <div class="form-group">
                <label for="pwd">Giới tính:</label>
                <input type="number" class="form-control" id="pwd" placeholder="Nhập giới tính (0 là nữ và 1 là nam)" name="pwd">
            </div>
            <div class="form-group">
                <label for="pwd">Số điện thoại:</label>
                <input type="number" class="form-control" id="pwd" placeholder="Nhập số điện thoại" name="pwd">
            </div>
            <button type="submit" class="btn btn-primary" style="margin-top: 16px;">Thêm</button>
        </form>
    </div>


<?php
    
?>




<?php
include('templates/footer.php')
?>