<?php
    require("config/constants.php");
    if(isset($_GET["id"])){
        $id = $_GET["id"];
        $sql = "delete from blood_recipient where reci_id = $id";
        $result = mysqli_query($conn, $sql);
        if($result){
            $_SESSION["success"] = "Xóa thành công";
            header("location: index.php");
        }else{
            $_SESSION["error"] = "Lỗi không xóa được";
            header("location: error.php");
        }
    }else{
        $_SESSION["error"] = "Lỗi không có id để xóa";
        header("location: error.php");
    }
?>