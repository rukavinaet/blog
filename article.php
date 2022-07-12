<?php
require_once 'con.php';
$row_match = $row['ArticleTopic'];
$no_use = $row['articleID'];
$sql_similar = "SELECT * FROM `blog_article` WHERE ArticleTopic = '$row_match' and NOT (articleID = '$no_use') ";
$result_similar = mysqli_query($conn, $sql_similar);
?>
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
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <link rel="canonical" href="https://rukavinaet.blog/<?php echo $row['articleID'] ?>">
    <link rel="icon" href="/favicon.ico">
</head>
<style>
    #others {
        cursor: pointer;
        color: black;
        text-decoration-line: underline;
        text-decoration-color: red;
        text-decoration-thickness: 2px;
        text-underline-offset: 24px
    }

    #header-desktop-menu-arrow {
        border: solid black;
        border-width: 0 2px 2px 0;
        display: inline-block;
        padding: 3px;
        transform: rotate(45deg);
        -webkit-transform: rotate(45deg);
        transition: 0.2s;
    }
</style>
<style>
    .article-cont{
        display: flex;
        justify-content: center;
        padding-top: 50px;
    }
    .article-content{
        max-width: 1077px;
        width: 100%;

    }
    .categegory-link{
        display: flex;
        justify-content: flex-start;
    }
    .categegory-link-a{
        text-decoration:none;
        color: #202020;
    }
    .categegory-link-a:hover{
        color: red;
    }
</style>


<body>
    <div class="article_body">
        <!--<p>Article Title: <?php //echo $row['articleName'] 
                                ?></p>-->
        <div class="article-cont">
            <div class="article-content">
                <div class="categegory-link" style="margin-bottom: 25px;">
                    <a class="categegory-link-a" href="/c/<?php echo $row['ArticleCategoryID'] ?>"><p style="letter-spacing: 1.5px;"><?php echo strtoupper($row['ArticleCategoryName']) ?></p></a>
                </div>
                <div class="title" >
                    <h1 style="margin: 0px 0px 45px 0px;color:#202020;line-height: 1.1785714286;font-size: 63px;font-weight:normal;letter-spacing: -1.2px;"><?php echo $row['articleName'] ?></h1>
                </div>
                <div class="mins-date-share">  
                    <p style="color: #5f6368;font-size: .9em;"><?php echo date('F j, Y', strtotime($row['ArticleDate'])) ?></p>
                    <p><?php echo $row['ArticleReadTime'] ?> min read</p>
                    <button>Share</button>
                </div>
                <div class="article-image" style="display: flex;justify-content:center;">
                   
                    <img style="width: 100%;margin:0px 17px;" src="http://rstatic.cloud/blog/image/<?php echo $row['ArticleImage'] ?>"></img>;
                </div>
                <div class="article-html">
                <p><?php echo $row['ArticleHTML'] ?></p>
                </div>
                <div class="articleposted">
                    <p>Posted in:</p><a href="/c/<?php echo $row['ArticleCategoryID'] ?>"><?php echo $row['ArticleCategoryName'] ?></a>

                </div>
                <div class="noflex">
                <hr>

                </div>

            </div>
          
        </div>
        <div class="more-articles">
        <?php 
        while($row_similar = mysqli_fetch_array($result_similar)){
            echo "<p>{$row_similar['articleName']} </p>";

        }
            
            
    ?>
        </div>
    </div>
</body>

</html>