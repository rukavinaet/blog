<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $row['articleName'] ?></title>
    <meta name="description" content="<?php echo $row['articleName'] ?>">
    <meta property="og:title" content="<?php echo $row['articleName'] ?>">
    <meta property="og:url" content="https://rukavinaet.blog/<?php echo $row['articleID'] ?>">
    <meta property="og:description" content="<?php echo $row['ArticleMetaDesc'] ?>">
    <meta property="og:image" content="<?php echo $row['ArticleImage'] ?>">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="<?php echo $row['ArticleImage'] ?>">
    <link rel="canonical" href="https://rukavinaet.blog/<?php echo $row['articleID'] ?>">
    <link rel="icon" href="/favicon.ico">
    <link rel="stylesheet" href="/meta/font.css">
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        font-family: Roboto;
    }
    body {
        height: 200vh;
    }
</style>


<body>
    <div class="article_body">
        <p>Article Title: <?php echo $row['articleName'] ?></p>
    </div>
    <?php include 'header.php'; ?>
</body>

</html>