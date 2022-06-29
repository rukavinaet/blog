<?php
if(isset($_GET['ID'])){
    require_once 'con.php';
    $ID = mysqli_real_escape_string($conn, $_GET['ID']);
    $sql = "SELECT * FROM `blog_article` WHERE articleID = '$ID' ";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    if (mysqli_num_rows($result)==0) { header("Location: /"); }
}
else{
    header("Location: /");
}
?>
<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title><?php echo $row['articleName'] ?></title> 
    <meta name="description" content="<?php echo $row['ArticleMetaDesc'] ?>"> 
    <meta property="og:title" content="Home - Page"> 
    <meta property="og:url" content="https://www.example.com/page"> 
    <meta property="og:description" content="OG Page Description"> 
    <meta property="og:image" content="/path/to/image">
    <meta property="og:image:alt" content="OG Image Description">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="large-image-twitter.jpg"> 
    <link rel="canonical" href="https://www.example.com/page"> 
    <link rel="icon" href="/favicon.ico">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    <link rel="manifest" href="site.webmanifest"> 
    <meta name="theme-color" content="#FF00FF"> >
    <link rel="stylesheet" href="/styles/css/styles.css"> 
    <link rel="stylesheet" href="/styles/css/print.css" media="print">
</head>

<body>
    <!-- Content -->
    <script src="js/app.js"></script> <!-- TODO: Update app entry point -->
    <script src="js/vendor/modernizr-{{MODERNIZR_VERSION}}.min.js"></script> <!-- TODO: Add Modernizr js -->
    <script src="/assets/js/xy-polyfill.js" nomodule></script>
    <script src="/assets/js/script.js" type="module"></script>

</body>

</html>