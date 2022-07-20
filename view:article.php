<?php

require_once 'con.php';
$ID = mysqli_real_escape_string($conn, $_GET['ID']);
$sql = "SELECT * FROM `blog_article` WHERE AID = '$ID' ";
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
    <title><?php echo $row['ATitle'] ?></title>
    <meta name="description" content="<?php echo $row['ADescription'] ?>">

    <meta property="og:title" content="<?php echo $row['ATitle'] ?>">
    <meta property="og:url" content="https://rukavinaet.blog/<?php echo $row['AID'] ?>">
    <meta property="og:description" content="<?php echo $row['ADescription'] ?>">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:image" content="uploads/<?php echo $row['AImage'] ?>"> <!-- TODO: og:image -->


    <meta name="twitter:image:src" content="uploads/<?php echo $row['AImage'] ?>" />
    <meta name="twitter:site" content="@rukavinaet" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="<?php echo $row['ATitle'] ?>" />
    <meta name="twitter:description" content="<?php echo $row['ADescription'] ?>" />
    <meta name="twitter:card" content="summary" />

    <link rel="canonical" href="https://rukavinaet.blog/<?php echo $row['AID'] ?>">
    <link rel="icon" href="/static/logo_128dp.png">
    <!--      -->
    <meta charset='UTF-8'>
    <meta name='keywords' content="<?php echo $row['AKeywords'] ?>">
    <meta name='description' content='<?php echo $row['ADescription'] ?>'>
    <meta name='copyright' content='Emanuel Tin Rukavina'>
    <meta name='robots' content='index,follow'>

    <meta name='author' content='Emanuel Tin Rukavina, copyright@rukavinaet.com'>
    <meta name='designer' content='Emanuel Tin Rukavina'>
    <meta name='reply-to' content='contact@rukavinaet.com'>
    <meta name='owner' content='Emanuel Tin Rukavina'>
    <meta name='url' content='https://rukavinaet.blog/<?php echo $row['AID'] ?>'>
    <meta name='identifier-URL' content='https://rukavinaet.blog/<?php echo $row['AID'] ?>'>
    <meta name='pagename' content='<?php echo $row['ATitle'] ?>'>




</head>
<style>
    #<?php echo $row['ACATID'] ?> {
        cursor: pointer;
        color: black;
        text-decoration-line: underline;
        text-decoration-color: red;
        text-decoration-thickness: 2px;
        text-underline-offset: 25px;
    }

    @media all and (max-width: 1285px) {
        #<?php echo $row['ACATID'] ?> {
            text-underline-offset: 12px;
        }
    }
</style>
<?php include 'style.php' ?>

<body>
    <div class="article_body">
        <div class="article-cont">
            <div class="article-content">
                <div class="categegory-link">
                    <a class="categegory-link-a" href="/category/<?php echo $row['ACATID'] ?>">
                        <p><?php echo strtoupper($row['ACATID']) ?></p>
                    </a>
                </div>
                <div class="title">
                    <h1><?php echo $row['ATitle'] ?></h1>
                </div>
                <div class="mins-date-share">
                    <div class="read-share">
                        <div class="right" style="display: flex;">
                            <p><?php echo date('F j, Y', strtotime($row['ADate'])) ?></p>
                            <p style="margin-left:20px;"><?php echo $row['ARead'] ?> mins read</p>
                        </div>
                        <button onclick="share_me();" style="cursor:pointer;border: none;background-color: transparent;">
                            <div class="button-flex" style="display: flex;justify-content:space-evenly">
                                <img class="prefferdark" style="height:22px;" src="/static/share.svg" alt="">
                                <p style="margin: auto;font-size: 16px;padding-inline: 7px;color: black;">Share</p>
                                <script>
                                    function share_me() {
                                        if (document.getElementById("share").style.display == "block") {
                                            document.getElementById("share").style.display = "none";
                                        } else {
                                            document.getElementById("share").style.display = "block";
                                        }
                                    }
                                </script>

                            </div>
                        </button>
                    </div>
                </div>
                <div class="article-image" style="display: flex;justify-content:center;">

                    <img style="width: 100%;" src="uploads/<?php echo $row['AImage'] ?>"></img>
                </div>
                <div class="image">
                    <p style="float: inline-end;font-size: 10px;color: #00000082;">Image source: <?php echo $row['AImageSourceCompany'] ?>  <?php echo $row['AImageSourcePerson'] ?></p>

                </div>

                <div class="article-html" style="padding-top: 40px;">
                    <p><?php echo $row['AHTML'] ?></p>
                </div>
                <div class="articleposted" style="margin: auto;
display: flex;
margin: 0px 0px;
padding-top: 50px;
height: 50px;">
                    <p style="margin-block: auto;">Posted in:</p><a style="text-transform:capitalize;" href="/category/<?php echo $row['ACATID'] ?>"><?php echo $row['ACATID'] ?></a>

                </div>
                <div class="noflex" style="margin-top: 80px;">
                    <hr style="opacity: 30%;">

                </div>

            </div>

        </div>
        <p class="related_stories">Related stories:</p>
        <div class="more-articles">


            <?php
            require_once 'con.php';
            $no_use = $row['AID'];
            $thiscategory = $row['ACATID'];
            $sql_similar = "SELECT * FROM `blog_article` where ACATID = '$thiscategory' and NOT (AID = '$no_use') and APublish = '1' ORDER BY RAND() LIMIT 3";
            $result_similar = mysqli_query($conn, $sql_similar);

            while ($row_similar = mysqli_fetch_array($result_similar)) {
                include 'more_articles.php';
            }
            ?>
        </div>

    </div>

    <div id="share" style="position: fixed;
display: none;
height: 100%;
width: 100%;
background-color: white;
top: 64px;">
        <div class="close-share" style="justify-content: end;
display: flex;margin-bottom: 40px;">
            <button onclick="share_me();" style="margin: 26px;background-color:transparent;border:none;"><img class="prefferdark" style="height: 30px;opacity:70%;" src="/static/mail-sub-close.svg" alt=""></button>
        </div>
        <ul style="display: flex;
justify-content: center;
flex-direction: column;
align-content: center;">
            <li>
                <a target="_blank" style="color:#4267b2;" href="https://www.facebook.com/sharer/sharer.php?u=https://rukavinaet.blog/<?php echo $row['AID'] ?>&quote=<?php echo $row['ATitle'] ?>">Facebook</a>
            </li>
            <li>
                <a target="_blank" style="color:#1c93e4;" href="https://twitter.com/intent/tweet?text=<?php echo $row['ATitle'] ?>&url=https://rukavinaet.blog/<?php echo $row['AID'] ?>">Twitter</a>
            </li>
            <li>
                <a target="_blank" style="color:#f22c00;" href="https://mail.google.com/mail/u/0/?view=cm&to&su=<?php echo $row['ATitle'] ?>&body=https%3A%2F%2Frukavinaet.blog/<?php echo $row['AID'] ?>%0A&bcc&cc&fs=1&tf=1">Gmail</a>
            </li>
            <li>
                <a target="_blank" style="color:#0071ac;" href="https://www.linkedin.com/sharing/share-offsite/?url=https://rukavinaet.blog/<?php echo $row['AID'] ?>">LinkedIn</a>
            </li>
            <li>
                <a target="_blank" style="color:#26c541;" href="https://wa.me/?text=<?php echo $row['AID'] ?>">Whatsapp</a>
            </li>
            <li>
                <a target="_blank" style="color:#0081c2;" href="https://t.me/share/url?url=https://rukavinaet.blog/<?php echo $row['AID'] ?>&text=<?php echo $row['ATitle'] ?>">Telegram</a>
            </li>
            <li>
                <a target="_blank" style="color:#f24100;" href="https://www.reddit.com/submit?url=https://rukavinaet.blog/<?php echo $row['AID'] ?>&title=<?php echo $row['ATitle'] ?>">Reddit</a>
            </li>
        </ul>

    </div>

</body>

</html>