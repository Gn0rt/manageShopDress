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
    <link rel="stylesheet" href="./CSS/login.css">
    <title>Login</title>
</head>

<body>
    <?php include'./connect.php'; 
    session_start();
    if(isset($_SESSION['user'])) {
        header("Location: index.php");
        exit();
    }
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['user'];
        $password = $_POST['password'];

        $result = mysqli_query($con, "SELECT *FROM user_db WHERE username = '$username' AND password = MD5('$password')");

        if($result->num_rows > 0) {
            $_SESSION['user'] = $username;
            header("Location: index.php");
        }else {
            echo"<script>alert('Đăng nhập thất bại!')</script>";
        }
        $con->close();
    }
    ?>
    <form class="formLogIn" action="" method="post">
        <h1>Đăng nhập</h1>
        <div class="container-login">
            <div class="user">
                <label for="">Tài khoản</label>
                <input type="text" class="username" name="user">
            </div>
            <div class="password">
                <label for="">Mật khẩu</label>
                <input type="password" class="pass" name="password">
            </div>

            <button type="submit" onclick="validate()">Đăng nhập</button>
            <div class="clear"></div>
        </div>


    </form>


    <script>
        const name = document.querySelector('.username');
        const pass = document.querySelector('.pass');
        const className = 'js-inp-check';

        function checkInput(variable, type) {
            val = variable.value;

            if (type === 'text' && val.trim() === '') {
                variable.classList.add(className);
            }
            else {
                variable.classList.remove(className);
            }
        }

        name.addEventListener('blur', function () {
            checkInput(name, 'text');
        });
        pass.addEventListener('blur', function () {
            checkInput(pass, 'text');
        });





    </script>
</body>

</html>