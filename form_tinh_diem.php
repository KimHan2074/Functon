<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .container{
    background-color: gray;
    border: 1px solid red;
    width: 50%;
    height: auto;
    }
    .title{
        color: rgb(5, 5, 124);
        text-align: center;
    }
    #hop_input{
        margin-left: 20px;
    }
    .hop_nho{
        margin: 15px 0;
    }
    .hop_nut{
        text-align: center;
    }
    #nhap_3{
        margin-left: 43px;
        color: red;
    }
    #ketqua{
        font-size: 25px;
    }
</style>
<body>
    <?php
        error_reporting(0); // Tắt hiển thị lỗi

        // Hàm tính điểm trung bình cộng
        function tinhTBC($diem_1, $diem_2, $nam_hoc) {
            if($nam_hoc == 1) {
                $diemTBC = ($diem_1 + ($diem_2 * 3)) / 3;
            } elseif($nam_hoc == 2) {
                $diemTBC = ($diem_1 + ($diem_2 * 3)) / 4;
            }
            return $diemTBC; // Trả về điểm trung bình cộng
        }
        
        $diem1 = $_POST['ky1'];
        $diem2 = $_POST['ky2'];
        $namhoc = $_POST['nam'];
        $diemTBC = tinhTBC($diem1, $diem2, $namhoc);
        $diemTBC = round($diemTBC,2);
        
        if(!$diemTBC){
            $xeploai="";
        }
        elseif ($diemTBC >= 9) {
            $xeploai = "Học sinh giỏi";
        } 
        elseif($diemTBC >= 7 && $diemTBC < 9) {
            $xeploai = "Học sinh khá";
        } 
        else {
            $xeploai = "Học sinh trung bình";
        }
    ?>

    <div class="container">
        <h1 class="title">Bảng điểm của em</h1>
        <form action="" id="hop_input" method="POST">
            <div class="hop_nho">
                <label for="">Semester 1: </label>
                <input type="number" name="ky1" id="diem1" value="<?php echo $diem1?>">
            </div>

            <div class="hop_nho">
                <label for="">Semester 2: </label>
                <input type="number" name="ky2" id="diem2" value="<?php echo $diem2?>">
            </div>

            <div class="hop_nho">
                <label for="">Year: </label>
                <select name="nam" id="year">
                    <?php
                        if ($_POST['nam'] == 1){
                            echo "<option value='1'>First</option>
                            <option value='2'>Second</option>";
                        }
                        else{
                            echo "<option value='2'>Second</option>
                            <option value='1'>First</option>";
                        }
                    ?>
                </select>
            </div>

            <div class="hop_nho">
                <label for="">Summarise: </label>
                <input type="number" name="tbc" id="result" value="<?php echo $diemTBC ?>" readonly>
            </div>
            
            <div class="kp">
                <p id="ketqua"><?php Xếp_loại: echo $xeploai?></p>
            </div>
            <input type="hidden" name="form_submit" value="1"/>        
            <input type="Submit" value="Submit">
            <input type="reset" value="Cancel" onclick="window.location.href='http://localhost:8080/han_php/form_tinh_diem.php'">

        </form>
    </div>
</body>
</html>
</html>