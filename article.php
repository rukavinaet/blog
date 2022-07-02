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

    header {
        height: 64px;
        position: fixed;
        top: 0;
        width: 100%;
        box-shadow: 0 2px 5px 0 rgba(0, 0, 0, .16), 0 2px 5px 0 rgba(0, 0, 0, .23);
        background-color: white;
    }

    .header-desktop {
        height: inherit;
        display: block;

    }

    .header-all {
        height: inherit;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding-inline: 25px;
    }

    .logo h1 {
        font-size: 1.3em;
    }

    .logo h1 a {
        color: black;
        text-decoration: none;
    }

    .logo-menu {
        display: flex;
        align-items: center;
    }

    .menu {
        padding-left: 47px;
    }

    .menu ul li {
        display: inline-block;
        list-style: none;
        padding-left: 20px;
        font-size: .86em;
        line-height: 1rem;
        letter-spacing: .04em;
    }

    .menu ul li a {
        color: #5f6368;
        cursor: pointer;
        text-decoration: none;
    }

    .menu ul li a:hover {
        color: black;
        cursor: pointer;
        text-decoration: none;
    }

    .menu ul li a:active {
        cursor: pointer;
        text-decoration: none;
    }



    #world:hover {
        color: black;
    }

    .button button {
        height: 50px;
        width: 126px;
        background-color: #ff0000c4;
        border: none;
        border-radius: 5px;
        color: white;
        font-size: 17px;
        cursor: pointer;
    }

    .button button:hover {
        background-color: red;

    }

    #arrow {
        border: solid black;
        border-width: 0 2px 2px 0;
        display: inline-block;
        padding: 3px;
        transform: rotate(45deg);
        -webkit-transform: rotate(45deg);
        transition: 0.2s;
    }

    #product-click {
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
        background-color: white;
        transition: .2s;
    }

    #prod-menu-con {
        height: inherit;
        opacity: 0%;
        display: block;
        transition: .1s ease-in-out;

        padding: 25px;
        visibility: hidden;
    }

    .menu-list {
        display: flex;
        justify-content: space-evenly;
    }

    .menu-list ul {
        list-style: none;
        width: 15%;
        opacity: 70%;
        line-height: 27px;
    }

    .menu-list ul li a {
        text-decoration: none;
        opacity: 70%;
        color: inherit;

    }

    .menu-list ul li a:hover {
        color: black;
        opacity: 100%;
    }

    .menu-list ul hr {
        margin: 15px 0px;
        opacity: 30%;
    }

    .menu-list ul p {
        text-transform: uppercase;
    }

    #sub {
        position: fixed;
        display: none;
        justify-content: center;
        background-color: #000000a3;
        width: 100%;
        height: 100%;
        top: 0;
    }

    #sub_s {
        position: fixed;
        display: flex;
        justify-content: center;
        background-color: #000000a3;
        width: 100%;
        height: 100%;
        top: 0;
    }

    .emailbox {
        width: 440px;
        height: 580px;
        background-color: white;
        margin: auto;
        border-radius: 5px;
    }

    .header-mobile {
        display: none;
    }

    .article_body {
        padding-top: 70px;
    }

    @media all and (max-width: 800px) {
        header {

            height: 64px;
        }

        .header-desktop {
            display: none;
        }

        .header-mobile {
            display: block;
        }

        .header-mobo-all {
            display: flex;
            height: 64px;
            justify-content: flex-start;
        }

        .header-mobo-all button {
            background-color: transparent;
            width: 64px;
            height: 64px;
            margin: auto 0px;
            border: none;
        }

        .header-mobo-all img {
            width: 28px;
            opacity: 70%;
            padding-top: 5px;
        }

        .header-mobo-all a {
            margin: auto 0px;
        }

        #header-expand {
            display: block;
            position: fixed;
            width: 80%;
            left: -80%;
            transition: .1s;
            height: 100%;
            top: 0;
            background-color: white;
        }

        .header-expand-upper {
            display: flex;
            height: 64px;
            justify-content: flex-start;
            border-bottom: 1px solid black;
        }

        .header-expand-upper button {
            background-color: transparent;
            width: 64px;
            height: 64px;
            margin: auto 0px;
            border: none;
        }

        .header-expand-upper img {
            width: 28px;
            opacity: 70%;
            padding-top: 5px;
        }

        .header-expand-upper a {
            margin: auto 0px;
        }

        #shadow-mobo {
            display: block;
            position: fixed;
            width: 20%;
            height: 100%;
            right: -20%;
            top: 0;
            background-color: black;
            transition: .1s;
            opacity: 60%;
        }
        .emailbox{
            overflow: auto;
        }
        .mail{
            padding-top: 100px;
        }

        #sub {
            position: fixed;
            display: none;
            justify-content: center;
            background-color: #000000a3;
            width: 100%;
            height: 100%;
            top: 0;
        }

        #sub_s {
            position: fixed;
            display: flex;
            justify-content: center;
            background-color: #000000a3;
            width: 100%;
            height: 100%;
            top: 0;
        }

        .emailbox {
            width: 100%;
            height: 100%;
            background-color: white;
            margin: auto;
            border-radius: 0px;
        }
        

        .header-expand-menu {
            overflow-y: auto;
            height: 600px;
            background-color: #5f6368;
        }
    }
</style>

<body>
    <div class="article_body">
        <p>Article Title: <?php echo $row['articleName'] ?></p>
    </div>

    <header>
        <div class="header-desktop">
            <div class="header-all">
                <div class="logo-menu">
                    <div class="logo">
                        <a href="https://rukavinaet.blog" style="opacity: 70%;">
                            <h1>Blog by
                        </a><a href="https://rukavinaet.com"><span style="color: red;">@rukavinaet</span></h1></a>
                    </div>
                    <div class="menu">
                        <ul>
                            <li><a href="/">Latest stories</a></li>
                            <li><a onclick="expandmenu();" style="cursor: pointer;
            color: black;
            text-decoration-line: underline;
            text-decoration-color: red;
            text-decoration-thickness: 2px;
            text-underline-offset: 24px"><span style="margin-right: 11px;">Around the blog</span><i id="arrow"></i></a></li>
                        </ul>
                    </div>
                </div>
                <script>
                    function expandmenu() {
                        if (document.getElementById("product-up").style.height == "400px") {
                            document.getElementById("product-up").style.height = "0px"
                            document.getElementById("prod-menu-con").style.opacity = "0%"
                            document.getElementById("prod-menu-con").style.visibility = "hidden"
                            document.getElementById("product-click").style.display = "none"
                            document.getElementById("arrow").style.transform = "rotate(45deg)"
                        } else {
                            document.getElementById("product-up").style.height = "400px"
                            document.getElementById("prod-menu-con").style.opacity = "100%"
                            document.getElementById("product-click").style.display = "block"
                            document.getElementById("arrow").style.transform = "rotate(-135deg)"
                            document.getElementById("prod-menu-con").style.visibility = "visible"

                        }
                    }

                    function showsub() {
                        if (document.getElementById("sub").style.display == "flex") {
                            document.getElementById("sub").style.display = "none"
                        } else {
                            document.getElementById("sub").style.display = "flex"
                        }
                    }

                    function showsub_s() {
                        document.getElementById("sub_s").style.display = "none";
                    }
                </script>

                <div class="button">
                    <button onclick="showsub();">Subscribe</button>
                </div>
            </div>
            <div id="product-click" onclick="expandmenu();"></div>
            <div id="product-up">
                <div id="prod-menu-con">
                    <div class="menu-list">
                        <ul>
                            <p>products</p>
                            <hr>
                            <li><a href="#">Test 1</a></li>
                            <li><a href="#">Test 1</a></li>
                            <li><a href="#">Test 1</a></li>
                            <li><a href="#">Test 1</a></li>
                            <li><a href="#">Test 1</a></li>
                        </ul>
                        <ul>
                            <p>Technology</p>
                            <hr>
                            <li><a href="#">Test 1</a></li>
                            <li><a href="#">Test 1</a></li>
                            <li><a href="#">Test 1</a></li>
                            <li><a href="#">Test 1</a></li>

                        </ul>
                        <ul>
                            <p>Inside web</p>
                            <hr>
                            <li><a href="#">Test 1</a></li>
                            <li><a href="#">Test 1</a></li>
                            <li><a href="#">Test 1</a></li>
                            <li><a href="#">Test 1</a></li>
                            <li><a href="#">Test 1</a></li>

                        </ul>
                        <ul>
                            <p>around the globe</p>
                            <hr>
                            <li><a href="#">Test 1</a></li>
                            <li><a href="#">Test 1</a></li>
                            <li><a href="#">Test 1</a></li>
                            <li><a href="#">Test 1</a></li>
                            <li><a href="#">Test 1</a></li>

                        </ul>
                    </div>

                </div>
            </div>
        </div>
        <div class="header-mobile">
            <script>
                function togglemenu() {
                    if (document.getElementById("header-expand").style.left == "0%") {
                        document.getElementById("header-expand").style.left = "-80%"
                        document.getElementById("shadow-mobo").style.right = "-20%"
                    } else {
                        document.getElementById("shadow-mobo").style.right = "0%"
                        document.getElementById("header-expand").style.left = "0%";
                    }
                }
            </script>
            <div class="header-mobo-all">
                <button onclick="togglemenu();"><img src="/static/menu_open.svg" alt=""></button>
                <a href="https://rukavinaet.blog" style="opacity: 70%;color:black;text-decoration:none;font-size:9px;">
                    <h1>
                        <span style="color: red;">@rukavinaet's</span> blog
                    </h1>
                </a>
            </div>
            <div id="header-expand">
                <div class="header-expand-upper">
                    <button onclick="togglemenu();"><img src="/static/close.svg" alt=""></button>
                    <a href="https://rukavinaet.blog" style="opacity: 70%;color:black;text-decoration:none;font-size:9px;">
                        <h1>
                            <span style="color: red;">@rukavinaet's</span> blog
                        </h1>
                    </a>
                </div>
                <div class="header-expand-menu">
                    <ul>
                        <li><a href="#">Latest stories</a></li>
                        <li>
                            <details>
                                <summary>Around this blog</summary>
                                <ul>
                                    <li>test</li>
                                    <li>test</li>
                                    <li>test</li>
                                </ul>
                            </details>
                        </li>
                    </ul>
                </div>
                <div class="button" style="display: flex;">
                    <button style="width: 80%;margin:auto;" onclick="showsub();">Subscribe</button>
                </div>
            </div>
            <div onclick="togglemenu();" id="shadow-mobo"></div>
        </div>





    </header>
    <style>
        .close {
            justify-content: end;
            display: flex;
        }

        .close button {
            background-color: transparent;
            border: none;
            margin: 10px;
            cursor: pointer;
        }

        .close button img {
            opacity: 70%;
            height: 26px;
        }

        .close button img:hover {
            opacity: 100%;
        }

        .mail {
            display: flex;
            justify-content: center;
            flex-direction: column;
        }

        .mail img {
            width: 45%;
            margin: auto;
        }

        .mail p {
            margin: auto;
            text-align: center;
            font-size: 22px;
            padding-top: 20px;
        }

        .form {
            display: flex;
            justify-content: center;
            padding-top: 20px;
        }

        .form form input {
            width: 100%;
            border-radius: 5px;
        }

        .sub_b {
            width: 180px;
            margin: auto;
            margin-top: auto;
            margin-top: 55px;
            background: red;
            border: none;
            border-radius: 5px;
            color: white;
            height: 50px;
            cursor: pointer;
            font-size: 15px;
        }

        .input-text {
            border: 1px solid #d0d0d0;
            border-radius: 5px;
            height: 30px;
            padding-inline: 5px;
        }
        @media all and (max-width: 800px){
            .sub_b {
            height: 64px;
        }
        }
    </style>
    <div id="sub">
        <div class="emailbox">
            <div class="close">
                <button onclick="showsub();"><img src="/static/close.svg" alt="" srcset=""></button>

            </div>
            <div class="mail">
                <img src="/static/mail.png" alt="">
                <p>The latest stories from <span style="color: red;">@rukavinaet</span>,<br> in your inbox.</p>
                <br>
                <br>
                <div class="form">
                    <form action="" method="post">
                        <input required class="input-text" type="text" name="fname" id="" placeholder="First name" autofocus><br><br>
                        <input required class="input-text" type="email" name="email" id="" placeholder="Email address"><br>

                        <p style="font-size: 13px;opacity:50%;max-width: 290px;">Sign up to receive news and other stories from rukavinaet.blog & partner websites.
                            Your information will be used in accordance with
                            this <a target="_blank" href="https://rukavinaet.com/legal/privacy#blog">privacy policy</a>. You may opt out at any time.</p><br>
                        <br>
                        <input required type="submit" value="Subscribe" class="sub_b">


                    </form>


                </div>
            </div>
        </div>
    </div>
    <?php if (!empty($_POST)) {
        //echo ("Hello " . $_POST["email"]);
        $test = $_POST["email"];

        echo (' <div id="sub_s">
        <div class="emailbox">
            <div class="close">
                <button onclick="showsub_s();"><img src="/static/close.svg" alt="" srcset=""></button>

            </div>
            <div class="mail">
                <img src="/static/mail_yes.png" alt="">
                <p style="margin-top:100px;">Done! Check your inbox to<br>
                confirm your subscription.</p>
                <a style="margin:auto;" href="https://mail.google.com"target="_blank"><button style="width: 180px;
                margin: auto;
                  margin-top: auto;
                margin-top: 100px;
                background: red;
                border: none;
                border-radius: 5px;
                color: white;
                height: 50px;cursor:pointer;
                font-size: 15px;"onclick="showsub_s();">Take me to gmail</button></a>
              
            </div>
        </div>
    </div>');
    } else {
    }
    ?>



</body>

</html>