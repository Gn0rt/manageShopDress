<?php 
    $sql_st = "SELECT *FROM `status`";
    $query_st = mysqli_query($con, $sql_st);

    $id = $_GET['id'];
    // $sql_pr = "SELECT *FROM product WHERE ID = '$id'";
    // $query_pr = mysqli_query($con, $sql_pr);
    // $row_pr = mysqli_fetch_assoc($query_pr);


    $sql_b = "SELECT bill.*, product.price AS prd_price FROM bill JOIN product ON bill.IdSp = product.ID";
    $query_b = mysqli_query($con, $sql_b);
    $row_b = mysqli_fetch_assoc($query_b);

    $sql_sl = "SELECT `Name`,`SDT`,`Email`,`DiaChi`,`GhiChu`,`id_st`,`time_buy` FROM bill WHERE `MaHD` = $id";
    $query_sl = mysqli_query($con, $sql_sl);
    $row_sl = mysqli_fetch_assoc($query_sl);

    if(isset($_POST['sbm'])) {
        $id_st = $_POST['stt'];
        $nameKH = $_POST['namePersonBuy'];
        $sdtKH = $_POST['sdt'];
        $emailKH = $_POST['email'];
        $dcKH = $_POST['diachi'];
        $gcKH = $_POST['ghichu'];

        $sql_up_st = "UPDATE bill SET `Name` = '$nameKH', SDT = '$sdtKH', 
        Email = '$emailKH', DiaChi = '$dcKH', GhiChu = '$gcKH', id_st = $id_st WHERE MaHD = $id" ;
        $query_up_st = mysqli_query($con, $sql_up_st);
    $id = $_GET['id'];

        header("Location: index.php?page_layout=danhsach");
    }
?>

<div class="container">
    <div class="card">
        <div class="card-header">
            <h2>Cập nhật bill</h2>
        </div>
        <div class="card-body">
            <form method="POST" action="" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Mã hóa đơn</label>
                    <input type="text" name="Mahd" class="form-control" disabled value="<?=$id?>">
                </div>
                <br>    
                <div class="form-group">
                    <label for="">Tên người thuê</label>
                    <input type="text" name="namePersonBuy" class="form-control"  value="<?=$row_sl['Name']?>">
                </div>
                <br>
                <div class="form-group">
                    <label for="">Số điện thoại</label>
                    <input type="number" name="sdt" class="form-control"  value="<?=$row_sl['SDT']?>">
                </div>
                <br>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" name="email" class="form-control"  value="<?=$row_sl['Email']?>">
                </div>
                <br>
                <div class="form-group">
                    <label for="">Địa chỉ</label>
                    <input type="text" name="diachi" class="form-control"  value="<?=$row_sl['DiaChi']?>">
                </div>
                <br>
                <div class="form-group">
                    <label for="">Ghi chú</label>
                    <input type="text" name="ghichu" class="form-control"  value="<?=$row_sl['GhiChu']?>">
                </div>
                <br>
                <div class="form-group">
                    <label for="">Trạng thái</label>
                    <select name="stt" class="form-control" id="">
                        <?php while($row_stt = mysqli_fetch_assoc($query_st)) {?>
                            <option value="<?=$row_stt['st_id']?>"> <?=$row_stt['st_name']?> </option>
                        <?php } ?>
                    </select>
                </div>
                <br>
                <div class="form-group">
                    <label for="">Thời gian mua</label>
                    <input type="text" name="time-buy" class="form-control" disabled value="<?=date("Y-m-d H:i:s", $row_b['time_buy'])?>">
                </div>
                <br>
                <!-- <div class="form-group">
                    <label for="">Giá</label>
                    <input type="text" name="giatien" class="form-control" disabled value="<?=$row_pr['prd_price']?>">
                </div>
                <br> -->
                <button name="sbm" type="submit" class="btn btn-success">Cập nhật</button>
            </form>
        </div>
    </div>
</div>