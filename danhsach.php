<?php 
    $sql = "SELECT *FROM product ";
    $query = mysqli_query($con, $sql);

    $sql_bill = "SELECT *FROM bill";
    $query_bill = mysqli_query($con, $sql_bill);

    //$sql_test_ = "SELECT bill.*, product.Name AS prd_name, product.price AS prd_price FROM bill JOIN product ON bill.IdSp = product.ID";


    $sql_test = "SELECT bill.*, product.Name AS prd_name, product.price AS prd_price, status.st_name AS stt_id FROM bill JOIN product ON bill.IdSp = product.ID 
                JOIN `status` ON bill.id_st = status.st_id";
    $query_test = mysqli_query($con, $sql_test);

    $sql_bc = "SELECT *FROM baocao";
    $query_bc = mysqli_query($con, $sql_bc);
?>




<style>
    #pagination {
            margin-top: 50px;
            margin-bottom: 50px;
        }
        .page-item {
            text-decoration: none;
            font-size: 12px;
            color: #000;
            background-color: #ccc;
            padding: 10px;
            margin: 0 5px 0 5px;
            
        }
        .page-item.strong {
            color: #fff;
            background-color: #000;
        }
</style>



<ul class="nav nav-pills mb-3 container" id="pills-tab" role="tablist" style="margin-top: 10px;">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">List</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Bill</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Báo cáo</button>
  </li>
</ul>
<div class="tab-content" id="pills-tabContent">
    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
  <?php 
        // số sản phẩm
        $item_per_page = !empty($_GET['per_page'])?$_GET['per_page']:4;
        // số trang hiện tại
        $current_page = !empty($_GET['page'])?$_GET['page']:1;
        $offset = ($current_page - 1) * $item_per_page;
        $products = mysqli_query($con,"SELECT * FROM product ORDER BY ID ASC LIMIT ".$item_per_page." OFFSET ".$offset."");
        $bill = mysqli_query($con,"SELECT * FROM bill ORDER BY MaHD ASC LIMIT ".$item_per_page." OFFSET ".$offset."");
        $total = mysqli_query($con, "SELECT * FROM product");
        $total = $total->num_rows;
        $totalPages = ceil($total / $item_per_page);
        $overallCounter = ($current_page - 1) * $item_per_page + 1;
?>
<?php 
    if(isset($_POST['find_sbm'])) {
        $find = $_POST['find_prd'];
    }

?>

        <div class="container">
            <div class="card">
                <div class="card-header">
                    <h2>Danh sách sản phẩm</h2>
                    <form action="" method="post">
                        <input type="text" name="find_prd">
                        <button type="submit" name="find_sbm" class="btn btn-primary">Tìm</button>
                    </form>
                </div>
                <?php 
                    if(isset($_POST['find_sbm'])) {
                        $giatri = $_POST['find_prd'];
                        $sql_f = "SELECT *FROM product WHERE ID LIKE '%$giatri%' OR `Name` LIKE '%$giatri%'";
                        $result = $con->query($sql_f);
                        if( $result->num_rows >0) {
                            echo'
                            <div class="card-body">
                                <table class="table ">
                                <thead class="table-dark">
                                    <tr>
                                        <th>#</th>
                                        <th>Tên sản phẩm</th>
                                        <th>Image</th>
                                        <th>Giá tiền</th>
                                        <th>Số lượng</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                            ';
                            while($row_f = $result->fetch_assoc()) {
                            echo"<tr>";
                                echo "<td>" . $overallCounter++ . "</td>";
                                echo"<td>{$row_f["Name"]}</td>";
                                echo"<td><img src='{$row_f['image']}' style='width:100px;'></td>";
                                echo"<td>{$row_f["price"]}</td>";
                                echo"<td>{$row_f["quantity"]}</td>";
                                echo"<td>
                                        <a href='index.php?page_layout=sua&id={$row_f['ID']}>'>Sửa</a>
                                    </td>";
                                echo"<td>
                                        <a onclick='return Del({$row_f['Name']})' href='index.php?page_layout=xoa&id={$row_f['ID']}>'>Xóa</a>
                                    </td>";

                            echo"</tr>";
                            }
                            echo"
                                </tbody>
                                </table>
                            </div>
                            
                            ";
                           
                        }else {
                            echo"Lỗi : " . $sql_f;
                        }
                    }
                
                ?>
                <div class="card-body">
                    <table class="table ">
                        <thead class="table-dark">
                            <tr>
                                <th>#</th>
                                <th>Tên sản phẩm</th>
                                <th>Image</th>
                                <th>Giá tiền</th>
                                <th>Số lượng</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            <?php $i = 1; while($row = mysqli_fetch_assoc($products)) { ?>
                                <tr>
                                    <td><?=$overallCounter++?></td>
                                    <td><?=$row['Name']?></td>
                                    <td>
                                        <img src="<?=$row['image']?>" alt="" style="width:100px;">
                                    </td>
                                    <td><?=$row['price']?></td>
                                    <td><?=$row['quantity']?></td>
                                    <td>
                                        <a href="index.php?page_layout=sua&id=<?=$row['ID']?>">Sửa</a>
                                    </td>
                                    <td>
                                        <a onclick="return Del('<?=$row['Name']?>')" href="index.php?page_layout=xoa&id=<?=$row['ID']?>">Xóa</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <?php include'./pagination.php' ?>
            <a class="btn btn-primary" href="index.php?page_layout=them">Thêm mới</a>
        </div>
    </div>

    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
    <div class="container">
            <div class="card">
                <div class="card-header">
                    <h2>Danh sách bill</h2>
                </div>
                <div class="card-body">
                    <table class="table ">
                        <thead class="table-dark">
                            <tr>                   
                                <th>Mã HD</th>
                                <th>Tên KH</th>
                                <th>SDT</th>
                                <th>Email</th>
                                <th>Địa chỉ</th>
                                <th>Notes</th>
                                <th>ID Sản phẩm</th>
                                <th>Tình trạng</th>
                                <th>Thời gian mua</th>
                                <th>Giá</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            <?php while($row = mysqli_fetch_assoc($query_test)) { ?>
                                <tr>
                                    <td><?=$row['MaHD']?></td>
                                    <td><?=$row['Name']?></td>
                                    <td><?=$row['SDT']?></td>
                                    <td><?=$row['Email']?></td>
                                    <td><?=$row['DiaChi']?></td>
                                    <td><?=$row['GhiChu']?></td>
                                    <td><?=$row['prd_name']?></td>
                                    <td><?=$row['stt_id'] ?></td>
                                    <td><?= date("Y-m-d H:i:s", $row['time_buy']) ?></td>
                                    <td><?=$row['prd_price']?></td>
                                    <td>
                                        <a href="index.php?page_layout=suabill&id=<?=$row['MaHD']?>">Cập nhật</a>
                                    </td>
                                    <td>
                                        <a onclick="return Del('<?=$row['MaHD']?>')" href="index.php?page_layout=xoabill&id=<?=$row['MaHD']?>">Hủy</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- <a class="btn btn-primary" href="index.php?page_layout=thembill">Thêm mới</a> -->
        </div>
    </div>


    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
    <div class="container">
            <div class="card">
                <div class="card-header">
                    <h2>Báo cáo</h2>
                </div>
                <div class="card-body">
                    <table class="table ">
                        <thead class="table-dark">
                            <tr>                   
                                <th>#</th>
                                <th>Tên NV</th>
                                <th>Đơn hàng</th>
                                <th>Notes</th>
                                <th>Thời gian</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            <?php while($row = mysqli_fetch_assoc($query_bc)) { ?>
                                <tr>
                                    <td></td>
                                    <td><?=$row['NameNV']?></td>
                                    <td><?=$row['DonHang']?></td>
                                    <td><?=$row['Note']?></td>
                                    <td><?= date("Y-m-d H:i:s", $row['Time']) ?></td>
                                    <td>
                                        <a href="index.php?page_layout=suabc&id=<?=$row['IdBc']?>">Cập nhật</a>
                                    </td>
                                    <td>
                                        <a onclick="return Del('<?=$row['IdBc']?>')" href="index.php?page_layout=xoabc&id=<?=$row['IdBc']?>">Xóa</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <a class="btn btn-primary" href="index.php?page_layout=thembc">Thêm mới</a>
        </div>
    </div>
</div>
<p><a href="./logout.php">Đăng xuất</a></p>

<script>
    function Del(name) {
        return confirm("Bạn có chắc chắn xóa sản phẩm: " + name + " không?");
    }
</script>