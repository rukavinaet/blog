<?php
if (isset($_GET['ID'])) {
    require_once 'con.php';
    $ID = mysqli_real_escape_string($conn, $_GET['ID']);
    $sql = "SELECT * FROM `blog_article` WHERE articleID = '$ID' ";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    if (mysqli_num_rows($result) == 0) {
        header("Location: /");
    }
    else{
        include 'article.php';
    }
} 
elseif (isset($_GET['CAT'])) {
    require_once 'con.php';
    $ID = mysqli_real_escape_string($conn, $_GET['CAT']);
    $sql = "SELECT * FROM `blog_category` WHERE categoryID = '$ID' ";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
   
        include_once 'c.php';
    
} 

elseif (isset($_GET['topic'])) {
    require_once 'con.php';
    $ID = mysqli_real_escape_string($conn, $_GET['topic']);
    $sql = "SELECT * FROM `blog_article` WHERE ArticleCategoryID = '$ID' ";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    if (mysqli_num_rows($result) == 0) {
        header("Location: /");
    }
    else{
        include 't.php';
    }
} 
else {
    include 'index_view.php';
}
?>
<?php include 'header.php'; ?>
