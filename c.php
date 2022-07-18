<?php 
require_once 'con.php';
$ID = mysqli_real_escape_string($conn, $_GET['CAT']);
$sql = "SELECT * FROM `blog_article` WHERE ACATID = '$ID' and APublish = '1'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) == 0) {
    header("Location: /");
}
else{
}

$sql2 = "SELECT * FROM `blog_category` WHERE categoryID = '$ID'";
$result2 = mysqli_query($conn, $sql2);
$row2 = mysqli_fetch_array($result2);

?>


<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title><?php echo ucfirst($row2['categoryID']); ?> | The RBlog</title> <!-- TODO: update page title -->
    <meta name="description" content="Page Description"> <!-- TODO: update meta description -->
    <meta property="og:title" content="Home - Page">  <!-- TODO: update og:title -->
    <meta property="og:url" content="https://www.example.com/page"> <!-- TODO: update og:url -->
    <meta property="og:description" content="OG Page Description">  <!-- TODO: update og:description -->
    <meta property="og:image" content="/path/to/image">  <!-- TODO: og:image -->
    <meta property="og:image:alt" content="OG Image Description"> <!-- TODO: update og:image:alt --> 
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="large-image-twitter.jpg"> <!-- TODO: update twitter:cared -->
    <link rel="canonical" href="https://www.example.com/page"> <!-- TODO: update canonical link -->
    <link rel="icon" href="/static/logo_128dp.png">
    <link rel="manifest" href="site.webmanifest"> <!-- TODO: update web app manifest file -->
    <meta name="theme-color" content="#FF00FF"> <!-- TODO: update meta theme color -->
    <link rel="stylesheet" href="/styles/css/styles.css">  <!-- TODO: Update styles -->
    <link rel="stylesheet" href="/styles/css/print.css" media="print">
</head>
<style>
    #<?php echo $row2['categoryID'] ?> {
        cursor: pointer;
        color: black;
        text-decoration-line: underline;
        text-decoration-color: red;
        text-decoration-thickness: 2px;
        text-underline-offset: 25px;
    }

    @media all and (max-width: 1285px) {
        #<?php echo $row2['categoryID'] ?> {
            text-underline-offset: 12px;
        }
    }
</style>
<?php include 'style.php' ?>

<body>
    <div class="article_body">
        <div class="cat-cont">
            <div class="cat-content">
            <p style="letter-spacing: 1.5px;">OFFICIAL BLOG</p>
        <p class="cat-title"><?php echo $row2['categoryID']; ?></p>
        <p class="cat-subtitle"><?php echo $row2['CatDisplayText']; ?></p>

        <?php 
        while($row_m = mysqli_fetch_array($result)){
            echo "<p><a href='/{$row_m['AID']}'>{$row_m['ATitle']}</a> </p>";

        }
            
            
    ?>
            </div>
        </div>
        
    </div>

   
    
  
</body>
</html>