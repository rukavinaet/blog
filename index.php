<?php
if (isset($_GET['ID'])) {
    require_once 'con.php';
    $ID = mysqli_real_escape_string($conn, $_GET['ID']);
    $sql = "SELECT * FROM `blog_article` WHERE articleID = '$ID' ";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    if (mysqli_num_rows($result) == 0) {
        include 'index_view.php';
    }
    else{
        include 'article.php';
    }
} 
else {
    include 'index_view.php';
}
?>