<?php 
    $id = $_GET['id'];
    $sql = "DELETE FROM baocao WHERE IdBc = $id";

    $query = mysqli_query($con, $sql);
    header("Location: index.php?page_layout=danhsach");

?>