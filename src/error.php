<?php
    require('templates/header.php');
    require("config/constants.php");
    $error = "";
    if(isset($_SESSION["error"])){
        $error = $_SESSION["error"];
        unset($_SESSION["error"]);
    }else{
        header("location: index.php");
    }
    
?>
    <div class="container">
        <h2 class="text-center" style="margin-top: 40px; margin-bottom:24px;"><?php echo $error; ?></h2>
        <button type="button" class="btn btn-primary" style="margin-bottom: 12px"><a href="index.php" class="text-white">Quay lại</a></button>
    </div>
<?php
    
?>




<?php
include('templates/footer.php')
?>