<?php 
    $id = $_GET['id'];
    $sql = "DELETE FROM product WHERE ID = $id";

    $query = mysqli_query($con, $sql);
    header("Location: index.php?page_layout=danhsach");

?>