<?php
    require('templates/header.php');
    require("config/constants.php");
?>
    <div class="container">
        <h2 class="text-center" style="margin-top: 40px; margin-bottom:24px;">Quản lý người nhận máu</h2>
        <?php
            if(isset($_SESSION["success"])){
                $success = $_SESSION["success"];
                echo "
                    <div class='alert alert-success'>
                        <strong>$success</strong>
                    </div>
                ";
                unset($_SESSION["success"]);
            }
        ?>
        
        <button type="button" class="btn btn-primary" style="margin-bottom: 12px"><a href="add.php" class="text-white">Thêm</a></button>
        <table class="table text-center">
            <thead class="bg-dark text-white">
            <tr>
                <th>Tên</th>
                <th>Giới tính</th>
                <th>Tuổi</th>
                <th>Số điện thoại</th>
                <th>Lượng máu</th>
                <th>Ngày đăng kí</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
                <?php
                    $sql = "select * from blood_recipient";
                    $query = mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_assoc($query)){
                        echo "
                            <tr>
                                <td>".$row["reci_name"]."</td>
                                <td>";
                                    if($row["reci_sex"] == 0){
                                        echo "Nữ";
                                    }else{
                                        echo "Nam";
                                    }
                                echo "</td>
                                <td>".$row["reci_age"]."</td>
                                <td>".$row["reci_phno"]."</td>
                                <td>".$row["reci_bqnty"]."mL</td>
                                <td>".$row["reci_reg_date"]."</td>
                                <td><a href='detail.php?id=".$row["reci_id"]."'>Xem chi tiết</a></td>
                                <td><a href='update.php?id=".$row["reci_id"]."'>Sửa</a></td>
                                <td><a href='delete.php?id=".$row["reci_id"]."'>Xóa</a></td>
                            </tr>
                        ";
                    }
                ?>
            </tbody>
        </table>
    </div>


<?php
    
?>




<?php
include('templates/footer.php')
?>