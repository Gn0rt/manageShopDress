<?php 

$id = $_GET['id'];
$sql = "SELECT *FROM baocao";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($query);
if(isset($_POST['sbm'])) {
    $name = $_POST['bc_name'];
    $prd  = $_POST['bc_prd'];
    $nt= $_POST['bc_note'];

    $sql_b = "UPDATE baocao SET NameNV = '$name', DonHang = '$prd', Note = '$nt'  WHERE IdBc = $id" ;
    $query_b = mysqli_query($con, $sql_b);
    header("Location: index.php?page_layout=danhsach");
}

?>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h2>Sửa báo cáo</h2>
        </div>
        <div class="card-body">
            <form method="POST" action="" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Tên nhân viên</label>
                    <input type="text" name="bc_name" class="form-control" value="<?=$row['NameNV']?>">
                </div>
                <br>    
                <div class="form-group">
                    <label for="">Đơn hàng</label>
                    <input type="text" name="bc_prd" class="form-control" value="<?=$row['DonHang']?>">
                </div>
                <br>
                <div class="form-group">
                    <label for="">Note</label>
                    <input type="text" name="bc_note" class="form-control" value="<?=$row['Note']?>">
                </div>
                <br>
                <div class="form-group">
                    <label for="">Thời gian</label>
                    <input type="text" name="time_bc" class="form-control" disabled value="<?=date("Y-m-d H:i:s", $row['Time'])?>">
                </div>
                <br>
                <button name="sbm" type="submit" class="btn btn-success">Thêm</button>
            </form>
        </div>
    </div>
</div>