<?php 

    $id = $_GET['id'];

    $sql_up = "SELECT *FROM product WHERE ID = $id";
    $query_up = mysqli_query($con, $sql_up);
    $row_up = mysqli_fetch_array($query_up);
    if(isset($_POST['sbm'])) {
        $prd_name = $_POST['prd_name'];
        if($_FILES['image']['name']== '') {
            $image = $row_up['image'];
        }
        else {
            $img = basename($_FILES['image']['name']);
            $img_tmp = $_FILES['image']['tmp_name'];
            $dir = "IMG/";
            $target_file = $dir . $img;

            // Di chuyển tệp tin tạm thời đến đường dẫn mong muốn
            move_uploaded_file($img_tmp, $target_file);

            // Lưu đường dẫn mới vào biến $image
            $image = $dir . $img;
        }   
    
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];
        
        $sql = "UPDATE product SET `Name` = '$prd_name', `image` = '$image', `price` = $price, `quantity` = $quantity WHERE `ID` = $id";
        $query = mysqli_query($con, $sql);
        header("Location: index.php?page_layout=danhsach");
    }
?>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h2>Sửa sản phẩm</h2>
        </div>
        <div class="card-body">
            <form method="POST" action="" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Tên sản phẩm</label>
                    <input type="text" name="prd_name" accept="image/*" class="form-control" required value="<?=$row_up['Name']?>">
                </div>
                <br>    
                <div class="form-group">
                    <label for="">Image</label>
                    <input type="file" name="image" class="form-control">
                </div>
                <br>
                <div class="form-group">
                    <label for="">Giá sản phẩm</label>
                    <input type="number" name="price" class="form-control" required value="<?=$row_up['price']?>">
                </div>
                <br>
                <div class="form-group">
                    <label for="">Số lượng</label>
                    <input type="text" name="quantity" class="form-control" required value="<?=$row_up['quantity']?>">
                </div>
                <br>
                <button name="sbm" type="submit" class="btn btn-success">Sửa</button>
            </form>
        </div>
    </div>
</div>