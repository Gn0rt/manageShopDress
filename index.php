<?php
session_start();

// Kiểm tra xem người dùng đã đăng nhập chưa
if(!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Bảng điều khiển</title>
</head>
<body>
    <?php 
        include'./connect.php';
        if(isset($_GET['page_layout'])) {
            switch ($_GET['page_layout']) {
                case 'danhsach' :
                    include'./danhsach.php';
                    break;
                case 'them':
                    include'./themsp.php';
                    break;
                case 'sua': 
                    include'./suasp.php';
                    break;
                case 'xoa':
                    include'./xoasp.php';
                    break;
                case 'suabill':
                    include'./suabill.php';
                    break;
                case 'xoabill':
                    include'./xoabill.php';
                    break;
                case 'thembill':
                    include'./thembill.php';
                    break;
                case 'thembc':
                    include'./thembc.php';
                    break;
                case 'suabc':
                    include'./suabc.php';
                    break;
                case 'xoabc':
                    include'./xoabc.php';
                    break;
                default:
                    include'./danhsach.php';
                    break;
            }
        }else {
            include'./danhsach.php';
        }
    
    ?>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
