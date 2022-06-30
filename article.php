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
} else {
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
    <meta property="og:title" content="<?php echo $row['articleName'] ?>">
    <meta property="og:url" content="https://rukavinaet.blog/<?php echo $row['articleID'] ?>">
    <meta property="og:description" content="<?php echo $row['ArticleMetaDesc'] ?>">
    <meta property="og:image" content="<?php echo $row['ArticleImage'] ?>">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="<?php echo $row['ArticleImage'] ?>">
    <link rel="canonical" href="https://rukavinaet.blog/<?php echo $row['articleID'] ?>">
    <link rel="icon" href="/favicon.ico">
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        
    }
    body{
        height: 200vh;
        
    }

    header {
        height: 64px;
        position: fixed;
        top: 0;
        width: 100%;
        box-shadow: 0 2px 5px 0 rgba(0, 0, 0, .16), 0 2px 5px 0 rgba(0, 0, 0, .23);
        background-color: white;
    }

    .header-all {
        height: inherit;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding-inline: 25px;
    }

    .logo h1 {
        font-size: 1.2em;
    }

    .logo-menu {
        display: flex;
        align-items: center;
    }

    .menu {
        padding-left: 40px;
    }

    .menu ul li {
        display: inline-block;
        list-style: none;
        padding-left: 20px;
        font-size: .75em;
        line-height: 1rem;
    }

    .button button {
        height: 55px;
        width: 130px;
    }
    #product-click{
        width: 100%;
        height: 100%;
        background-color: transparent;
        position: fixed;
        top: 465px;
        display: none;
    }

    #product-up {
        display: block;
        position: absolute;
        height: 0px;
        width: 100%;
        box-shadow: 0 2px 5px 0 rgba(0, 0, 0, .16), 0 2px 5px 0 rgba(0, 0, 0, .23);
        background-color: aqua;
        transition: .2s ease-in-out;
    }
    #prod-menu-con{
        height: inherit;
        opacity: 0%;
        display:block;
        transition: .6s ease-in-out;
        visibility: hidden;
    }
    .article_body{
        padding-top: 70px;
    }
</style>

<body>
    <div class="article_body">
    <a href="sdsdssaddsa">asssa</a>
    </div>
    
    <header>
        <div class="header-all">
            <div class="logo-menu">
                <div class="logo">
                    <h1>RUKAVINAET'S Blog</h1>
                </div>
                <div class="menu">
                    <ul>
                        <li><a href="#">Latest stories</a></li>
                        <li><a onclick="expandmenu();">Product updates</a></li>
                    </ul>
                </div>
            </div>
            <script>
                function expandmenu(){
                    if(document.getElementById("product-up").style.height == "400px"){
                        document.getElementById("product-up").style.height = "0px"
                        document.getElementById("prod-menu-con").style.opacity = "0%"
                        document.getElementById("prod-menu-con").style.visibility = "hidden"
                        document.getElementById("product-click").style.display = "none"
                    }
                    else{
                        document.getElementById("product-up").style.height = "400px"
                        document.getElementById("prod-menu-con").style.opacity = "100%"
                        document.getElementById("product-click").style.display = "block"
                        document.getElementById("prod-menu-con").style.visibility = "visible"

                    }
                }
            </script>

            <div class="button">
                <button>Subscribe</button>
            </div>
        </div>
        <div id="product-click" onclick="expandmenu();"></div>
        <div id="product-up">
            <div id="prod-menu-con">
                <ul>
                    <li>Item 1</li>
                    <li>Item 1</li>
                    <li>Item 1</li>
                </ul>
            </div>
        </div>
        
        
    </header>

</body>

</html>