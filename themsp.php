<?php 
    if(isset($_POST['sbm'])) {
        $prd_name = $_POST['prd_name'];

        //tên gốc của tệp tin trên máy tính người dùng
        $img = basename($_FILES['image']['name']);
        // đường dẫn tạm thời của tệp tin trên máy chủ
        $img_tmp = $_FILES['image']['tmp_name'];

        $price = $_POST['price'];
        $quantity = $_POST['quantity'];
        //đường dẫn
        $dir = "IMG/";
        // Tạo đường dẫn hoàn chỉnh của tệp tin
        $target_file = $dir . $img;
        move_uploaded_file($img_tmp, $target_file);
        // Lưu đường dẫn vào cơ sở dữ liệu
        $img_path = $dir.$img;
        $sql = "INSERT INTO product (`Name`, `image`, `price`, `quantity`) VALUES ('$prd_name', '$img_path', '$price', '$quantity')";
        $query = mysqli_query($con, $sql);
        header("Location: index.php?page_layout=danhsach");
    }
?>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h2>Thêm sản phẩm</h2>
        </div>
        <div class="card-body">
            <form method="POST" action="" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Tên sản phẩm</label>
                    <input type="text" name="prd_name" accept="image/*" class="form-control" required>
                </div>
                <br>    
                <div class="form-group">
                    <label for="">Image</label>
                    <input type="file" name="image" class="form-control" required>
                </div>
                <br>
                <div class="form-group">
                    <label for="">Giá sản phẩm</label>
                    <input type="number" name="price" class="form-control" required>
                </div>
                <br>
                <div class="form-group">
                    <label for="">Số lượng</label>
                    <input type="text" name="quantity" class="form-control" required>
                </div>
                <br>
                <button name="sbm" type="submit" class="btn btn-success">Thêm</button>
            </form>
        </div>
    </div>
</div>