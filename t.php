<?php 
require_once 'con.php';
$ID = mysqli_real_escape_string($conn, $_GET['topic']);
$sql = "SELECT * FROM `blog_article` WHERE ArticleTopic = '$ID' ";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) == 0) {
    header("Location: /");
}
else{
}
?>
<style>
    #others{
        cursor: pointer;
                color: black;
                text-decoration-line: underline;
                text-decoration-color: red;
                text-decoration-thickness: 2px;
                text-underline-offset: 24px
    } #header-desktop-menu-arrow {
        border: solid black;
        border-width: 0 2px 2px 0;
        display: inline-block;
        padding: 3px;
        transform: rotate(45deg);
        -webkit-transform: rotate(45deg);
        transition: 0.2s;
    }
</style>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Topic: </title> <!-- TODO: update page title -->
    <script type="module">
            document.documentElement.classList.remove('no-js');
            document.documentElement.classList.add('js');
    </script>
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
    <link rel="icon" href="/favicon.ico">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    <link rel="manifest" href="site.webmanifest"> <!-- TODO: update web app manifest file -->
    <meta name="theme-color" content="#FF00FF"> <!-- TODO: update meta theme color -->
    <link rel="stylesheet" href="/styles/css/styles.css">  <!-- TODO: Update styles -->
    <link rel="stylesheet" href="/styles/css/print.css" media="print">
</head>
<body>
<div class="article_body">
<?php 
    while($row = mysqli_fetch_array($result)){
        echo "<p>Category: {$row['articleName']} </p>";

    }
        
        
    ?>
    
</div>

   
  
</body>
</html>