<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./IMG/camile-logo-01-.png">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./CSS/normalize.min.css">
    <link rel="stylesheet" href="./CSS/grid.css">
    <link rel="stylesheet" href="./CSS/base.css">
    <link rel="stylesheet" href="./CSS/trangchu.css">
    <link rel="stylesheet" href="./CSS/vaycuoi.css">

    <title>Váy cưới</title>
    <style>
        #pagination {
            margin-top: 50px;
        }
        .page-item {
            text-decoration: none;
            font-size: 1.6rem;
            color: #000;
            background-color: #faebd7;
            padding: 20px;
            border-radius: 50%;
            margin: 0 5px 0 5px;
            
        }
        .page-item.strong {
            background-color: #f5ce9a;
        }
    </style>
</head>
<!-- 
    0 - 1 - 2 - 3
    OFFSET: 0;
    per_page: 4;
    Page: 1;
    -> (1-1) * 4 = 0;

    4 - 5 - 6 - 7
    OFFSET: 4;
    per_page: 4;
    Page: 2;
    -> (2-1) * 4 = 4;

    8 - 9 - 10 - 11
    OFFSET: 8;
    per_page: 4;
    Page 3;
    -> (3-1) * 4 = 8;


     -->
<body>
    <?php 
        include'./connect.php';
        // số sản phẩm
        $item_per_page = !empty($_GET['per_page'])?$_GET['per_page']:4;
        // số trang
        $current_page = !empty($_GET['page'])?$_GET['page']:1;
        $offset = ($current_page - 1) * $item_per_page;
        $products = mysqli_query($con,"SELECT * FROM product ORDER BY ID ASC LIMIT ".$item_per_page." OFFSET ".$offset."");
        $total = mysqli_query($con, "SELECT * FROM product");
        $total = $total->num_rows;
        $totalPages = ceil($total / $item_per_page);
    ?>
    
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

    <!-- contain -->
    <section id="container">
        <div class="contain-head">
            <div class="contain-options">
                <a href="./trangchu.php" class="notChoose">Trang chủ</a>
                <span>/</span>
                <a href="" class="choose">Váy Cưới</a>
            </div>

            <!-- <div class="contain-find">
                <div class="contain-input">
                    <input type="text">
                </div>
                <i class="fa-solid fa-magnifying-glass"></i>
            </div> -->
        </div>

        <div class="contain-main">
            <div class="grid wide">
                <div class="row">
                    <?php while($row = mysqli_fetch_array($products)) {  ?>
                    <div class="col l-3 contain-main__product">
                        <a href="./product_1.php?id=<?=$row['ID']?>"><img src="<?=$row['image']?>" alt=""></a>
                        <div class="contain-main__product-text">
                            <a href="./product_1.php?id=<?=$row['ID']?>">
                                <?=$row['Name']?>
                            </a>
                        </div>
                    </div>
                    <?php   } ?>

                    <!-- <div class="col l-3 contain-main__product">
                        <a href="./product_2.php"><img src="./IMG/product-2.jpg" alt=""></a>
                        <div class="contain-main__product-text">
                            <a href="./product_2.php">
                                02. Bộ sưu tập Thơ Collection 2023-2024 Season 1 Camile Bridal
                            </a>
                        </div>
                    </div>

                    <div class="col l-3 contain-main__product">
                        <a href="./product_3.php"><img src="./IMG/product-3.jpg" alt=""></a>
                        <div class="contain-main__product-text">
                            <a href="./product_3.php">
                                03. Bộ sưu tập Thơ Collection 2023-2024 Season 2 Camile Bridal
                            </a>
                        </div>
                    </div>

                    <div class="col l-3 contain-main__product">
                        <a href="./product_4.php"><img src="./IMG/product-4.jpg" alt=""></a>
                        <div class="contain-main__product-text">
                            <a href="./product_4.php">
                                04. BST Váy cưới Cheri Cheri Lady
                            </a>
                        </div>
                    </div>

                    <div class="col l-3 contain-main__product">
                        <a href="./product_5.php"><img src="./IMG/product-5.jpg" alt=""></a>
                        <div class="contain-main__product-text">
                            <a href="./product_5.php">
                                05. Bộ sưu tập Camile Classic With Satin 2023
                            </a>
                        </div>
                    </div>

                    <div class="col l-3 contain-main__product">
                        <a href="./product_6.php"><img src="./IMG/product-6.jpg" alt=""></a>
                        <div class="contain-main__product-text">
                            <a href="./product_6.php">
                                06. Bộ sưu tập Camile Halo Limited 2023
                            </a>
                        </div>
                    </div>

                    <div class="col l-3 contain-main__product">
                        <a href="./product_7.php"><img src="./IMG/product-7.jpg" alt=""></a>
                        <div class="contain-main__product-text">
                            <a href="./product_7.php">
                                07. Bộ sưu tập Fall 2023 – Camellia bloom
                            </a>
                        </div>
                    </div>

                    <div class="col l-3 contain-main__product">
                        <a href="./product_8.php"><img src="./IMG/product-8.jpg" alt=""></a>
                        <div class="contain-main__product-text">
                            <a href="./product_8.php">
                                08. Bst cưới đôi bạn thân Halo Camile
                            </a>
                        </div>
                    </div> -->

                </div>
                
                <?php include'./pagination.php' ?>
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
</body>

</html>