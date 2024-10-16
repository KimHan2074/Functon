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
        
        function find($so){
            if (!$so) {
                return ("");
            }
            elseif ($so%2==0) {
               return("Số nhập vào là số chẵn!");
            }else{
               return("Số nhập vào là số lẻ!");
            }
        }
        $num = $_POST['num'];
        $kq = find($num);
    ?>
    <form action="chan_le.php" method="POST">
        <input type="number" name="num" value="<?php echo $num?>">
        <input type="hidden" name="form_submit" value="1"/>        
        <input type="Submit" value="Submit">
        <p class="kq"><?php echo $kq ?></p>
    </form>
</body>
</html>