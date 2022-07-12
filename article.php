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
    #<?php echo $row['ArticleCategoryID'] ?> {
        cursor: pointer;
        color: black;
        text-decoration-line: underline;
        text-decoration-color: red;
        text-decoration-thickness: 2px;
        text-underline-offset: 24px
    }
</style>
<style>
    .article-cont {
        display: flex;
        justify-content: center;
        padding-top: 50px;
    }

    .article-content {
        max-width: 1077px;
        width: 100%;

    }

    .categegory-link {
        display: flex;
        justify-content: flex-start;
        margin-bottom: 25px;
    }

    .categegory-link-a {
        text-decoration: none;
        color: #202020;
    }

    .categegory-link-a p {
        letter-spacing: 1.5px;
    }

    .categegory-link-a:hover {
        color: red;
    }

    .title h1 {
        margin: 0px 0px 45px 0px;
        color: #202020;
        line-height: 1.1785714286;
        font-size: 63px;
        font-weight: normal;
        letter-spacing: -1.2px;
    }

    .read-share {
        padding-bottom: 30px;
    }

    .mins-date-share p {
        color: #5f6368;
        font-size: .9em;
    }

    .read-share {
        display: flex;
        justify-content: space-between;
    }

    .article-html {
        line-height: 1.7;
        font-size: 1.1em;
        letter-spacing: .02em;
        font-weight: 390;
        max-width: 830px;
        margin: auto;
    }

    @media all and (max-width: 1285px) {
        .article-content {
            margin: 0px 14px;
        }

        .categegory-link-a p {
            font-size: smaller;
        }

        .title h1 {
            font-size: 38px;
        }
    }
</style>


<body>
    <div class="article_body">
        <div class="article-cont">
            <div class="article-content">
                <div class="categegory-link">
                    <a class="categegory-link-a" href="/category/<?php echo $row['ArticleCategoryID'] ?>">
                        <p><?php echo strtoupper($row['ArticleCategoryName']) ?></p>
                    </a>
                </div>
                <div class="title">
                    <h1><?php echo $row['articleName'] ?></h1>
                </div>
                <div class="mins-date-share">
                    <div class="read-share">
                        <p><?php echo date('F j, Y', strtotime($row['ArticleDate'])) ?></p>
                        <button style="cursor:pointer;border: none;background-color: transparent;">
                            <div class="button-flex" style="display: flex;justify-content:space-evenly">
                                <img style="height:22px;" src="/static/share.svg" alt="">
                                <p style="margin: auto;font-size: 16px;padding-inline: 7px;color: black;">Share</p>

                            </div>
                        </button>
                    </div>
                </div>
                <div class="article-image" style="display: flex;justify-content:center;">

                    <img style="width: 100%;" src="http://rstatic.cloud/blog/image/<?php echo $row['ArticleImage'] ?>"></img>
                </div>
                <p style="float: inline-end;font-size: 10px;color: #00000082;">Image source: Pixabay / Karen Jubinville</p>

                <div class="article-html" style="padding-top: 40px;">
                    <p><?php echo $row['ArticleHTML'] ?></p>
                </div>
                <div class="articleposted">
                    <p>Posted in:</p><a href="/category/<?php echo $row['ArticleCategoryID'] ?>"><?php echo $row['ArticleCategoryName'] ?></a>

                </div>
                <div class="noflex">
                    <hr>

                </div>

            </div>

        </div>
        <div class="more-articles">
            <?php
            while ($row_similar = mysqli_fetch_array($result_similar)) {
                echo "<p>{$row_similar['articleName']} </p>";
            }


            ?>
        </div>
    </div>
</body>

</html>