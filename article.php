<?php

require_once 'con.php';
$ID = mysqli_real_escape_string($conn, $_GET['ID']);
$sql = "SELECT * FROM `blog_article` WHERE articleID = '$ID' ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
if (mysqli_num_rows($result) == 0) {
    header("Location: /");
} else {
}
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
        text-underline-offset: 24px;
    }

    @media all and (max-width: 1285px) {
        #<?php echo $row['ArticleCategoryID'] ?> {
            text-underline-offset: 12px;
        }
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

    .articleposted a {
        margin-inline: 20px;
        background-color: #ff000021;
        padding: 6px 10px;
        border-radius: 25px;
        color: #b50000;
        text-decoration: none;
        font-size: .9em;
        margin-block: auto;
    }

    .articleposted a:hover {
        margin-inline: 20px;
        background-color: red;
        padding: 6px 10px;
        border-radius: 25px;
        color: white;
        text-decoration: none;
        font-size: .9em;
        margin-block: auto;
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
                        <button onclick="share_me();" style="cursor:pointer;border: none;background-color: transparent;">
                            <div class="button-flex" style="display: flex;justify-content:space-evenly">
                                <img style="height:22px;" src="/static/share.svg" alt="">
                                <p style="margin: auto;font-size: 16px;padding-inline: 7px;color: black;">Share</p>
                                <script>
                                    function share_me(){
                                        if(document.getElementById("share").style.display == "block"){
                                            document.getElementById("share").style.display = "none";
                                        }else{
                                            document.getElementById("share").style.display = "block";
                                        }
                                    }
                                </script>

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
                <div class="articleposted" style="margin: auto;
display: flex;
margin: 0px 0px;
padding-top: 50px;
height: 50px;">
                    <p style="margin-block: auto;">Posted in:</p><a style="" href="/category/<?php echo $row['ArticleCategoryID'] ?>"><?php echo $row['ArticleCategoryName'] ?></a>

                </div>
                <div class="noflex" style="margin-top: 80px;">
                    <hr style="opacity: 30%;">

                </div>

            </div>

        </div>
        <p class="related_stories" >Related stories:</p>
        <div class="more-articles">
            <style>
                .related_stories{
                display: flex;
  justify-content: center;
  font-size: 40px;
  margin-block: 50px;
            }
                .more-articles {
                    display: flex;
                    justify-content: space-evenly;
                    padding-inline: 250px;
                    margin-bottom: 100px;
                }

                .article-block {
                    display: flex;
                    flex-direction: column;
                    border: 1px solid #00000040;
                    width: min-content;
                    text-align: left;
                    border-radius: 20px;
                }

                .article-block img {
                    border-radius: 20px 20px 0px 0px;
                    width: 400px;
                }

                .article-block-inner {
                    padding: 30px;
                    text-transform: uppercase;
                }

                @media all and (max-width: 1285px) {
                    .related_stories{
                display: flex;
  justify-content: center;
  font-size: 25px;
  margin-block: 50px;}
                     .more-articles {
                    display: flex;
                    justify-content: space-evenly;
                    flex-direction: column;
                    width: 90%;
                    padding-inline: 0px;
                    margin-bottom: 100px;
                    margin-inline: 5%;
                }
                    .article-block {
                        display: flex;
                        border: 1px solid #00000040;
                        width: 100%;
                        text-align: left;
                        border-radius: 20px;
                        margin-bottom: 10px;
                    }
                    .article-block-inner {
                    padding: 10px 30px;
                    text-transform: uppercase;
                }

                    .article-block img {
                        display: none;
                    }
                }
            </style>

            <?php
            require_once 'con.php';
            $row_match = $row['ArticleCategoryID'];
            $no_use = $row['articleID'];
            $sql_similar = "SELECT * FROM `blog_article` where NOT (articleID = '$no_use') ORDER BY RAND() LIMIT 3";
            $result_similar = mysqli_query($conn, $sql_similar);

            while ($row_similar = mysqli_fetch_array($result_similar)) {
                include 'more_articles.php';
            }
            ?>
        </div>

    </div>
    <style>
        #share ul li{
            margin: auto;
list-style: none;margin-block: 15px;
text-transform: uppercase;

        }
        #share ul li a{
            text-decoration: none;
        }
    </style>
    <div id="share" style="position: fixed;
display: none;
height: 100%;
width: 100%;
background-color: white;
top: 64px;">
<div class="close-share" style="justify-content: end;
display: flex;margin-bottom: 40px;">
    <button onclick="share_me();" style="margin: 26px;background-color:transparent;border:none;"><img style="height: 30px;opacity:70%;" src="/static/mail-sub-close.svg" alt=""></button>
</div>
<ul style="display: flex;
justify-content: center;
flex-direction: column;
align-content: center;">
    <li>
        <a style="color:#4267b2;" href="#">Facebook</a>
    </li>
    <li>
        <a style="color:#1c93e4;" href="#">Twitter</a>
    </li><li>
        <a style="color:#f22c00;" href="#">Gmail</a>
    </li><li>
        <a style="color:#0071ac;" href="#">LinkedIn</a>
    </li><li>
        <a style="color:#26c541;" href="#">Whatsapp</a>
    </li><li>
        <a style="color:#0081c2;" href="#">Telegram</a>
    </li><li>
        <a style="color:#324257;" href="#">Tumblr</a>
    </li><li>
        <a style="color:#f24100;" href="#">Reddit</a>
    </li><li>
        <a style="color:black;" href="#">Copy link</a>
    </li>
</ul>

    </div>

</body>

</html>