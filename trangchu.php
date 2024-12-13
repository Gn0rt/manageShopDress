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
    <title>Camile</title>
</head>

<body>
    <!-- Header -->
    <header id="header">
        <div class="header">
            <div class="header-logo">
                <img src="./IMG/camile-logo-01-.png" alt="">
            </div>
        </div>

        <div class="header-lists">
            <div class="header-list">
                <ul class="header-list__option">
                    <li><a href="./trangchu.php" class="click">TRANG CHỦ</a></li>
                    <li><a href="./vaycuoi.php">VÁY CƯỚI</a></li>
                    <li>
                        <a href="./about-us.php">ABOUT US</a>
                        <i class="fa-solid fa-circle-info"></i>
                    </li>
                </ul>
            </div>
        </div>

        <div class="aspect-ratio-169">
            <img src="./IMG/vaycuoi.jpg" alt="">
            <img src="./IMG/vay-cuoi-xoe-19.jpg" alt="">
            <img src="./IMG/vay-cuoi-2.jpg" alt="">
            <img src="./IMG/vay-cuoi-3.jpg" alt="">
        </div>

        <div class="dot-container">
            <div class="dot active"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
        </div>
    </header>

    <!-- Modal -->
    <!-- <section class="modal">
        <div class="modal-container">
            <header class="modal-header">

            </header>
            <div class="modal-body">

            </div>
            <footer class="modal-footer">

            </footer>
        </div>
    </section> -->




    <!-- Váy cưới -->
    <section class="slideshow-container">
        <div class="slideshow-text">
            <h2>
                <span><i class="fa-regular fa-heart"></i></span>
                Váy cưới camile bridal: tự tin là chính hãng
            </h2>
        </div>
        <div class="mySlides fade">
            <div class="imgSlide" style="display: flex;">
                <img src="./IMG/slide-1.jpg" style="width:100%;margin-right: 5px;">
                <img src="./IMG/slide-2.jpg" style="width:100%;margin-right: 5px;">
                <img src="./IMG/slide-3.jpg" style="width:100%;margin-right: 5px;">
            </div>
        </div>

        <div class="mySlides fade">
            <div class="imgSlide" style="display: flex;">
                <img src="./IMG/slide-4.jpg" style="width:100%;margin-right: 5px;">
                <img src="./IMG/slide-5.jpg" style="width:100%;margin-right: 5px;">
                <img src="./IMG/slide-6.jpg" style="width:100%;margin-right: 5px;">
            </div>
        </div>

        <div class="mySlides fade">
            <div class="imgSlide" style="display: flex; ">
                <img src="./IMG/slide-1.jpg" style="width:100%;margin-right: 5px;">
                <img src="./IMG/slide-5.jpg" style="width:100%;margin-right: 5px;">
                <img src="./IMG/slide-4.jpg" style="width:100%;margin-right: 5px;">
            </div>
        </div>

        <a class="btn-prev" onclick="plusSlides(-1)">❮</a>
        <a class="btn-next" onclick="plusSlides(1)">❯</a>

        <div class="slideBtnMore">
            <a href="./vaycuoi.php" class=""><button>Xem thêm ...</button></a>
        </div>
    </section>

    <!-- About us -->
    <section id="about-us">
        <div class="info">
            <div class="info-logo">
                <img src="./IMG/Clogo.png" alt="">
            </div>
            <div class="info-content">
                <h3>“CAMILE BRIDAL – NƠI VÁY CƯỚI LÀ <span style="color: pink;">ĐẲNG CẤP TINH HOA</span>“</h3>
                <p>
                    <span style="font-weight: 600;">CAMILE BRIDAL</span> là đơn vị cung cấp các dịch vụ về váy cưới uy
                    tín và chuyên nghiệp hàng
                    đầu tại Hà
                    Nội. Với đội ngũ nhân viên tư vấn chuyên nghiệp, các nhà thiết kế váy cưới hàng đầu cùng chất lượng
                    dịch vụ uy tín, luôn sẵn sàng đáp ứng mọi nhu cầu của khách hàng, <span
                        style="font-weight: 600;">CAMILE BRIDAL</span> tự tin
                    đem những
                    giá trị của mình tới cho các cô dâu tại Hà Nội và trên cả nước…
                </p>
                <a href="./about-us.php"><button class="info-btn">Xem thêm ...</button></a>
            </div>
        </div>

        <div class="work-style">
            <div class="grid wide">
                <div class="row">
                    <div class="col l-4 work-style__content">
                        <div class="icon">
                            <i class="fa-solid fa-earth-asia"></i>
                        </div>
                        <h4>HIỆN ĐẠI</h4>
                        <p>Bắt kịp xu hướng thời trang trên thế giới</p>
                    </div>
                    <div class="col l-4 work-style__content">
                        <div class="icon">
                            <i class="fa-regular fa-comments"></i>
                        </div>
                        <h4>THẤU HIỂU</h4>
                        <p>Thấu hiểu nhu cầu, tư vấn thiết kế tận tâm</p>
                    </div>
                    <div class="col l-4 work-style__content">
                        <div class="icon">
                            <i class="fa-solid fa-gift"></i>
                        </div>
                        <h4>HOÀN HẢO</h4>
                        <p>Sản phẩm hoàn thiện đạt độ hoàn hảo, tinh tế cao</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- footer -->
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

    <script src="./JS/trangchu.js"></script>
</body>

</html>