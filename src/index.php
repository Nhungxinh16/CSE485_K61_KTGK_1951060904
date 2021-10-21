<?php
    require('templates/header.php');
    require("config/constants.php");
?>
    <div class="container">
        <h2 class="text-center">Quản lý người hiến máu</h2>
        <table class="table text-center">
            <thead class="bg-dark text-white">
            <tr>
                <th>Tên</th>
                <th>Giới tính</th>
                <th>Tuổi</th>
                <th>Số điện thoại</th>
                <th>Lượng máu</th>
                <th>Ngày đăng kí</th>
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
                            </tr>
                        ";
                    }
                ?>
            </tbody>
        </table>
        <button type="button" class="btn btn-primary"><a href="add.php" class="text-white">Thêm</a></button>
    </div>


<?php
    
?>




<?php
include('templates/footer.php')
?>