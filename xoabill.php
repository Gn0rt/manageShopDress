<?php 
    $id = $_GET['id'];
    $sql = "DELETE FROM bill WHERE MaHD = $id";

    $query = mysqli_query($con, $sql);
    header("Location: index.php?page_layout=danhsach");

?>