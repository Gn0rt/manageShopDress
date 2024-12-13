<?php 
        if(isset($_POST['sbm'])) {
            $name_bc = $_POST['bc_name'];
            $prd =  $_POST['bc_prd'];
            $note_bc =  $_POST['bc_note'];
 
    
            $sql = "INSERT INTO baocao (`NameNV`, `DonHang`, `Note`,`Time`) 
            VALUES ('$name_bc', '$prd', '$note_bc', ".time().")";
            $query = mysqli_query($con, $sql);
            header("Location: index.php?page_layout=danhsach");
        }    


?>

<div class="container">
    <div class="card">
        <div class="card-header">
            <h2>Thêm báo cáo</h2>
        </div>
        <div class="card-body">
            <form method="POST" action="" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Tên nhân viên</label>
                    <input type="text" name="bc_name" class="form-control" required>
                </div>
                <br>    
                <div class="form-group">
                    <label for="">Đơn hàng</label>
                    <input type="text" name="bc_prd" class="form-control" required>
                </div>
                <br>
                <div class="form-group">
                    <label for="">Note</label>
                    <input type="text" name="bc_note" class="form-control" required>
                </div>
                <br>
                <button name="sbm" type="submit" class="btn btn-success">Thêm</button>
            </form>
        </div>
    </div>
</div>