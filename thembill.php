<?php 
        $sql_st = "SELECT *FROM `status`";
        $query_st = mysqli_query($con, $sql_st);
    if(isset($_POST['sbm'])) {
        $name_ps = $_POST['ps_name'];
        $sdt_ps =  $_POST['ps_sdt'];
        $email_ps =  $_POST['ps_email'];
        $addr_ps =  $_POST['ps_address'];
        $note_ps =  $_POST['ps_notes'];
        $prd_ps =  $_POST['ps_product'];
        $stt_ps =  $_POST['ps_stt'];

        $sql = "INSERT INTO bill (`Name`, `SDT`, `Email`,`DiaChi`,`GhiChu`,`IdSp`,`id_st`) 
        VALUES ('$name_ps', '$sdt_ps', '$email_ps', '$addr_ps','$note_ps','$prd_ps','$stt_ps')";
        $query = mysqli_query($con, $sql);
        header("Location: index.php?page_layout=danhsach");

        
        

        // $price = $_POST['price'];
        // $quantity = $_POST['quantity'];
        // //đường dẫn
        // $dir = "IMG/";
        // // Tạo đường dẫn hoàn chỉnh của tệp tin
        // $target_file = $dir . $img;
        // move_uploaded_file($img_tmp, $target_file);
        // // Lưu đường dẫn vào cơ sở dữ liệu
        // $img_path = $dir.$img;
        // $sql = "INSERT INTO product (`Name`, `image`, `price`, `quantity`) VALUES ('$prd_name', '$img_path', '$price', '$quantity')";
        // $query = mysqli_query($con, $sql);
        // header("Location: index.php?page_layout=danhsach");
    }
?>

<div class="container">
    <div class="card">
        <div class="card-header">
            <h2>Thêm bill</h2>
        </div>
        <div class="card-body">
            <form method="POST" action="" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Tên khách hàng</label>
                    <input type="text" name="ps_name" class="form-control" required>
                </div>
                <br>    
                <div class="form-group">
                    <label for="">SDT</label>
                    <input type="text" name="ps_sdt" class="form-control" required>
                </div>
                <br>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" name="ps_email" class="form-control" required>
                </div>
                <br>
                <div class="form-group">
                    <label for="">Địa chỉ</label>
                    <input type="text" name="ps_address" class="form-control" required>
                </div>
                <br>
                <div class="form-group">
                    <label for="">Notes</label>
                    <input type="text" name="ps_notes" class="form-control" required>
                </div>
                <br>
                <div class="form-group">
                    <label for="">Sản phẩm</label>
                    <input type="text" name="ps_product" class="form-control" required>
                </div>
                <br>
                <div class="form-group">
                    <label for="">Trạng thái</label>
                    <select name="ps_stt" class="form-control" id="">
                        <?php while($row_stt = mysqli_fetch_assoc($query_st)) {?>
                            <option value="<?=$row_stt['st_id']?>"> <?=$row_stt['st_name']?> </option>
                        <?php } ?>
                    </select>
                </div>
                <br>

                <button name="sbm" type="submit" class="btn btn-success">Thêm</button>
            </form>
        </div>
    </div>
</div>