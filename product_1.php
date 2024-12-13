<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./IMG/camile-logo-01-.png">
    <link rel="stylesheet" href="./CSS/normalize.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./CSS/grid.css">
    <link rel="stylesheet" href="./CSS/base.css">
    <link rel="stylesheet" href="./CSS/trangchu.css">
    <link rel="stylesheet" href="./CSS/product.css">
    <title>Camile</title>
</head>

<body>
    <?php include'./connect.php'; ?>
    <div class="main">
        <header id="header">
            <div class="header">
                <div class="header-logo">
                    <img src="./IMG/camile-logo-01-.png" alt="">
                </div>
            </div>

            <div class="header-lists">
                <div class="header-list">
                    <ul class="header-list__option">
                        <li><a href="./trangchu.php">TRANG CHỦ</a></li>
                        <li><a href="./vaycuoi.php" class="click">VÁY CƯỚI</a></li>
                        <li>
                            <a href="./about-us.php">ABOUT US</a>
                            <i class="fa-solid fa-circle-info"></i>
                        </li>
                    </ul>
                </div>
            </div>
        </header>

        <section class="product-content">
            <div class="grid wide">
                <div class="row product-box">
                    <?php 
                        if(isset($_GET['id'])) {
                            $id = $_GET['id'];
                            $result = mysqli_query($con, "SELECT *FROM product WHERE ID = ".$id."");
                            if($result->num_rows > 0) {
                                $row = $result->fetch_assoc();
                    ?>
                        <div class="col l-6 box1">
                            <img src="<?=$row['image']?>" alt="">
                        </div>
                        <div class="col l-6 box2">
                            <div class="box2-header">
                                <h3><?=$row['Name']?></h3>
                            </div>
                            <div class="box2-price">
                                <p><?= number_format($row['price'], 0, ",", ".") ?> đ</p>
                            </div>
                            <div class="box2-content">
                                <p>
                                    Mây Collection của Camile Bridal không chỉ là bộ sưu tập váy cưới,
                                    mà là một câu chuyện về cảm hứng, tình yêu, và sự tự tin. Hãy để
                                    chúng tôi giúp bạn thể hiện phiên bản đẹp nhất của chính mình trong
                                    ngày trọng đại. Đặt lịch thử váy ngay hôm nay và khám phá sự độc đáo
                                    của Mây Collection.</p>
                            </div>

                            <div class="box2-btn-buy">
                                <button class="js-buy"><span>THUÊ NGAY</span> <br> Gọi điện xác nhận và giao hàng tận
                                    nơi</button>
                            </div>
                        </div>
                            <?php } ?>
                    <?php } ?>
                </div>

                <div class="row describe-product">
                    <div class="col l-12 describe-content">
                        <h3>Cảm hứng từ giấc mơ váy cưới</h3>
                        <p>
                            Mây Collection bắt nguồn từ cảm hứng chân thành của cô gái về giấc mơ váy cưới.
                            Đây không chỉ là việc chọn mua một chiếc váy,
                            mà là quá trình tự tạo nên một tác phẩm nghệ thuật
                            thể hiện tâm hồn và cá tính của người phụ nữ trong
                            ngày trọng đại.
                        </p>
                        <h3>Thiết kế tinh tế</h3>
                        <p>
                            Mây Collection không ngừng hoàn thiện từng chi tiết,
                            từ cắt may đến sự kết hợp màu sắc, để mang đến một
                            bộ sưu tập váy cưới hoàn hảo nhất. Những chi tiết
                            tinh tế, đường nét sáng tạo, và chất liệu cao cấp
                            làm nên sự độc đáo của Mây Collection.
                        </p>
                        <h3>Màu sắc độc đáo</h3>
                        <p>
                            Mỗi chiếc váy trong bộ sưu tập đều mang màu sắc riêng biệt,
                            từ trắng tinh khôi đến những gam màu ấn tượng. Điều này giúp
                            cô dâu tạo nên những khoảnh khắc đáng nhớ và thể hiện cá tính
                            của mình trong ngày cưới.
                        </p>
                    </div>
                    <!-- <div class="col l-3 describe-picture">
                        <img src="./IMG/des_p1-1.jpg" alt="">
                    </div>
                    <div class="col l-3 describe-picture">
                        <img src="./IMG/des_p1-2.jpg" alt="">
                    </div>
                    <div class="col l-3 describe-picture">
                        <img src="./IMG/des_p1-3.jpg" alt="">
                    </div>
                    <div class="col l-3 describe-picture">
                        <img src="./IMG/des_p1-4.jpg" alt="">
                    </div>
                    <div class="col l-3 describe-picture">
                        <img src="./IMG/des_p1-5.jpg" alt="">
                    </div>
                    <div class="col l-3 describe-picture">
                        <img src="./IMG/des_p1-6.jpg" alt="">
                    </div>
                    <div class="col l-3 describe-picture">
                        <img src="./IMG/des_p1-7.jpg" alt="">
                    </div>
                    <div class="col l-3 describe-picture">
                        <img src="./IMG/des_p1-8.jpg" alt="">
                    </div> -->
                </div>
            </div>
        </section>

        <footer id="footer">
            <div class="socials">
                <div class="social-logo">
                    <img src="./IMG/camile-logo-01-.png" alt="">
                </div>
                <p class="social-phone">
                    <i class="fa-solid fa-phone"></i>
                    Call us: 0123 456 789
                </p>
                <p class="social-email">
                    <i class="fa-solid fa-envelope"></i>
                    abcxyz@gmail.com
                </p>
                <p class="social-address">
                    <i class="fa-solid fa-location-dot"></i>
                    Đường Trịnh Văn Bô, Nam Từ Liêm, Hà Nội
                </p>
                <div class="social-internet">
                    <a href=""><i class="fb fa-brands fa-facebook"></i></a>
                    <a href=""><i class="yt fa-brands fa-youtube"></i></a>
                    <a href=""><i class="tt fa-brands fa-tiktok"></i></a>
                </div>
                <p class="social-copyright">
                    <i class="fa-regular fa-copyright"></i>
                    Bản quyền thuộc sở hữu của Nhóm 6
                </p>
            </div>
        </footer>
    </div>



    <?php 
        include'./connect.php';
        
    
    
    ?>
    <form class="modal" method="post">
        <div class="modal-contain js-modal-container">
        <?php 
                $id = $_GET['id'];
            if(isset($_GET['id'])) {
                $result = mysqli_query($con, "SELECT *FROM product WHERE ID = ".$id."");
                if($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
            ?>

            <header class="modal-header">
                <div class="modal-header_text">
                    <p><?=$row['Name']?></p>
                </div>
                <div class="modal-close">
                    <i class="fa-solid fa-xmark"></i>
                </div>
            </header>

            <div class="modal-body">
                <div class="modal-body-left">
                    <div class="modal-body-left_header">
                        <div class="modal-body-left_img">
                            <img src="<?=$row['image']?>" alt="" style="height: 140px;">
                        </div>
                        <div class="modal-body-left_text">
                            <p><?=$row['Name']?></p>
                        </div>
                    </div>
                    <div class="modal-body-left_bottom">
                        <p>
                            Bạn vui lòng nhập đúng số điện thoại để
                            chúng tôi sẽ gọi xác nhận đơn hàng trước khi giao
                            hàng. Xin cảm ơn!</p>
                    </div>
                    <div class="modal-body-left_QR" style="text-align: center;">
                        <p style="font-size: 16px">QR thanh toán!</p>
                        <img src="./IMG/QRcode.jpg" alt="" style="width: 200px; margin:0 auto;">
                    </div>
                </div>
                <div class="modal-body-right">
                    <p>Thông tin người mua</p>
                    <div class="modal-right-box-1">
                        <input type="text" name="fullName" id="" class="fullName" placeholder="Họ và tên" required>
                        <input type="text" name="numberPhone" id="" class="numberPhone" placeholder="Số điện thoại" required>
                    </div>
                    <input type="text" name="email" id="" class="Email" placeholder="Địa chỉ email (Bắt buộc)" required>
                    <textarea name="address" id="" cols="51" rows="5" class="address" placeholder="Địa chỉ" required></textarea>
                    <textarea name="notes" id="" cols="51" rows="5" class="notes"
                        placeholder="Ghi chú (không bắt buộc)"></textarea>
                   <button name="thue" type="submit"  class="modal-btn">THUÊ NGAY</button>
                </div>
            </div>
            <?php } 
                
            ?>
        <?php } 
            if(isset($_POST['thue'])) {
                $name = $_POST['fullName'];
                $phone = $_POST['numberPhone'];
                $email = $_POST['email'];
                $addr = $_POST['address'];
                $note = $_POST['notes'];
                if(empty($name) || empty($phone) || empty($addr) || empty($email)) {
                    echo"<script>alert('Bạn cần nhập đủ thông tin!')</script>";
                }else {
                    if(strlen($phone) === 10 && is_numeric($phone)) {
                        $sql = "INSERT INTO bill(`Name`,`SDT`,`Email`,`DiaChi`,`GhiChu`,`IdSp`,`id_st`,`time_buy`) 
                                VALUES('$name', '$phone', '$email', '$addr', '$note', $id, '1', ".time().")";
                        $query = mysqli_query($con, $sql);   
                        
                        if($query) {
                             echo"<script>alert('Thành công!')</script>";
                             
                        }else {
                            echo"<script>alert('Thất bại!')</script>";
                            
                        }
                    }else {
                        echo"<script>alert('SDT sai!')</script>";
                    }
                }
            }
        ?>


        </div>
    </form>

    <script src="./JS/showModal.js"></script>
    <script src="./JS/checkInputModal.js"></script>


</body>

</html>