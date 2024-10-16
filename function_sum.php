<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function sum(){
            $num1 = 6;
            $num2 = 3;
            $sum = $num1 + $num2;
            return $sum;
        }
        echo("Tổng hai số: ".sum());
    ?>
</body>
</html>