<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        error_reporting(0);
        function sum($hsa, $hsb){
            $tong=$hsa+$hsb;
            return $tong;
        }
        $a = $_POST['hsa'];
        $b = $_POST['hsb'];
        $sum = sum($a, $b);
    ?>
    <form action="tinh_tong.php" method="POST">
        Hệ số a: <input type="number" name="hsa" value="<?php echo $a ?>"><br>
        Hệ số b: <input type="number" name="hsb" value="<?php echo $b ?>"><br>
        <input type="hidden" name="form_submit" value="1"/>        
        <input type="Submit" value="Submit">
        <div class="ketqua"><?php echo $sum ?></div>
    </form>


</body>
</html>