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

    .header-desktop-all {
        height: inherit;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding-inline: 25px;
    }

    .header-desktop-logo h1 {
        font-size: 1.3em;
    }

    .header-desktop-logo h1 a {
        color: black;
        text-decoration: none;
    }

    .header-desktop-logo-menuflex {
        display: flex;
        align-items: center;
    }

    .header-desktop-menu {
        padding-left: 47px;
    }

    .header-desktop-menu ul li {
        display: inline-block;
        list-style: none;
        padding-left: 20px;
        font-size: .86em;
        line-height: 1rem;
        letter-spacing: .04em;
    }

    .header-desktop-menu ul li a {
        color: #5f6368;
        cursor: pointer;
        text-decoration: none;
    }

    .header-desktop-menu ul li a:hover {
        color: black;
        cursor: pointer;
        text-decoration: none;
    }

    .header-desktop-menu ul li a:active {
        cursor: pointer;
        text-decoration: none;
    }

    .mail-button button {
        height: 50px;
        width: 126px;
        background-color: #ff0000c4;
        border: none;
        border-radius: 5px;
        color: white;
        font-size: 17px;
        cursor: pointer;
    }

    .mail-button button:hover {
        background-color: red;

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

    #header-desktop-click-remove-header {
        width: 100%;
        height: 100%;
        background-color: transparent;
        position: fixed;
        top: 465px;
        display: none;
    }

    #header-desktop-menu-expand-all {
        display: block;
        position: absolute;
        height: 0px;
        width: 100%;
        box-shadow: 0 2px 5px 0 rgba(0, 0, 0, .16), 0 2px 5px 0 rgba(0, 0, 0, .23);
        background-color: white;
        transition: .2s;
    }

    #header-desktop-menu-expand-content {
        height: inherit;
        opacity: 0%;
        display: block;
        transition: .1s ease-in-out;

        padding: 25px;
        visibility: hidden;
    }

    .header-desktop-menu-expand-content-list {
        display: flex;
        justify-content: space-evenly;
    }

    .header-desktop-menu-expand-content-list ul {
        list-style: none;
        width: 15%;
        opacity: 70%;
        line-height: 27px;
    }

    .header-desktop-menu-expand-content-list ul li a {
        text-decoration: none;
        opacity: 70%;
        color: inherit;

    }

    .header-desktop-menu-expand-content-list ul li a:hover {
        color: black;
        opacity: 100%;
    }

    .header-desktop-menu-expand-content-list ul hr {
        margin: 15px 0px;
        opacity: 30%;
    }

    .header-desktop-menu-expand-content-list ul p {
        text-transform: uppercase;
    }

    #mail-subcribe-box {
        position: fixed;
        display: none;
        justify-content: center;
        background-color: #000000a3;
        width: 100%;
        height: 100%;
        top: 0;
    }

    #mail-subcribe-box_success {
        position: fixed;
        display: flex;
        justify-content: center;
        background-color: #000000a3;
        width: 100%;
        height: 100%;
        top: 0;
    }

    .header-uni-emailbox {
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

        #header-mobo-expand {
            display: block;
            position: fixed;
            width: 80%;
            left: -80%;
            transition: .1s;
            height: 100%;
            top: 0;
            background-color: white;
        }

        .header-mobo-expand-upper {
            display: flex;
            height: 64px;
            justify-content: flex-start;
            border-bottom: 1px solid black;
        }

        .header-mobo-expand-upper button {
            background-color: transparent;
            width: 64px;
            height: 64px;
            margin: auto 0px;
            border: none;
        }

        .header-mobo-expand-upper img {
            width: 28px;
            opacity: 70%;
            padding-top: 5px;
        }

        .header-mobo-expand-upper a {
            margin: auto 0px;
        }

        #shadow-from-mobo-header {
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

        .header-uni-emailbox {
            overflow: auto;
        }

        .mail {
            padding-top: 100px;
        }

        #mail-subcribe-box {
            position: fixed;
            display: none;
            justify-content: center;
            background-color: #000000a3;
            width: 100%;
            height: 100%;
            top: 0;
        }

        #mail-subcribe-box_success {
            position: fixed;
            display: flex;
            justify-content: center;
            background-color: #000000a3;
            width: 100%;
            height: 100%;
            top: 0;
        }

        .header-uni-emailbox {
            width: 100%;
            height: 100%;
            background-color: white;
            margin: auto;
            border-radius: 0px;
        }


        .header-mobo-expand-menu {
            overflow-y: auto;
            height: 600px;
            background-color: #5f6368;
        }

        .header-mobo-expand-menu ul {
            display: flex;
            justify-content: center;
            flex-direction: column;
            padding: 0px 40px;
            list-style: none;
        }
    }
</style>

<body>
    <div class="article_body">
        <p>Article Title: <?php echo $row['articleName'] ?></p>
    </div>

    <header>
        <div class="header-desktop">
            <div class="header-desktop-all">
                <div class="header-desktop-logo-menuflex">
                    <div class="header-desktop-logo">
                        <a href="https://rukavinaet.blog" style="opacity: 70%;">
                            <h1>Blog by
                        </a><a href="https://rukavinaet.com"><span style="color: red;">@rukavinaet</span></h1></a>
                    </div>
                    <div class="header-desktop-menu">
                        <ul>
                            <li><a href="/">Latest stories</a></li>
                            <li><a onclick="expandmenu();" style="cursor: pointer;
            color: black;
            text-decoration-line: underline;
            text-decoration-color: red;
            text-decoration-thickness: 2px;
            text-underline-offset: 24px"><span style="margin-right: 11px;">Around the blog</span><i id="header-desktop-menu-arrow"></i></a></li>
                        </ul>
                    </div>
                </div>
                <script>
                    function expandmenu() {
                        if (document.getElementById("header-desktop-menu-expand-all").style.height == "400px") {
                            document.getElementById("header-desktop-menu-expand-all").style.height = "0px"
                            document.getElementById("header-desktop-menu-expand-content").style.opacity = "0%"
                            document.getElementById("header-desktop-menu-expand-content").style.visibility = "hidden"
                            document.getElementById("header-desktop-click-remove-header").style.display = "none"
                            document.getElementById("header-desktop-menu-arrow").style.transform = "rotate(45deg)"
                        } else {
                            document.getElementById("header-desktop-menu-expand-all").style.height = "400px"
                            document.getElementById("header-desktop-menu-expand-content").style.opacity = "100%"
                            document.getElementById("header-desktop-click-remove-header").style.display = "block"
                            document.getElementById("header-desktop-menu-arrow").style.transform = "rotate(-135deg)"
                            document.getElementById("header-desktop-menu-expand-content").style.visibility = "visible"

                        }
                    }

                    function showsub() {
                        if (document.getElementById("mail-subcribe-box").style.display == "flex") {
                            document.getElementById("mail-subcribe-box").style.display = "none"
                        } else {
                            document.getElementById("mail-subcribe-box").style.display = "flex"
                        }
                    }

                    function showsub_s() {
                        document.getElementById("mail-subcribe-box_success").style.display = "none";
                    }
                </script>

                <div class="mail-button">
                    <button onclick="showsub();">Subscribe</button>
                </div>
            </div>
            <div id="header-desktop-click-remove-header" onclick="expandmenu();"></div>
            <div id="header-desktop-menu-expand-all">
                <div id="header-desktop-menu-expand-content">
                    <div class="header-desktop-menu-expand-content-list">
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
                    if (document.getElementById("header-mobo-expand").style.left == "0%") {
                        document.getElementById("header-mobo-expand").style.left = "-80%"
                        document.getElementById("shadow-from-mobo-header").style.right = "-20%"
                    } else {
                        document.getElementById("shadow-from-mobo-header").style.right = "0%"
                        document.getElementById("header-mobo-expand").style.left = "0%";
                    }
                }
            </script>
            <div class="header-mobo-all">
                <button onclick="togglemenu();"><img src="/static/menu_open.svg" alt=""></button>
                <a href="https://rukavinaet.blog" style="color:black;text-decoration:none;font-size:9px;">
                    <h1>
                        <span style="color: red;">@rukavinaet's</span> <span style="opacity: 70%;">blog</span>
                    </h1>
                </a>
            </div>
            <div id="header-mobo-expand">
                <div class="header-mobo-expand-upper">
                    <button onclick="togglemenu();"><img src="/static/mail-sub-close.svg" alt=""></button>
                    <a href="https://rukavinaet.blog" style="color:black;text-decoration:none;font-size:9px;">
                        <h1>
                            <span style="color: red;">@rukavinaet's</span> <span style="opacity: 70%;"> blog</span>
                        </h1>
                    </a>
                </div>
                <div class="header-mobo-expand-menu">
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
                <div class="mail-button" style="display: flex;">
                    <button style="width: 80%;margin:auto;" onclick="showsub();">Subscribe</button>
                </div>
            </div>
            <div onclick="togglemenu();" id="shadow-from-mobo-header"></div>
        </div>





    </header>
    <style>
        .mail-sub-close {
            justify-content: end;
            display: flex;
        }

        .mail-sub-close button {
            background-color: transparent;
            border: none;
            margin: 10px;
            cursor: pointer;
        }

        .mail-sub-close button img {
            opacity: 70%;
            height: 26px;
        }

        .mail-sub-close button img:hover {
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

        .sub_b {
            width: 100%;
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
            height: 35px;
            padding-inline: 5px;
            width: 100%;
            border-radius: 5px;
        }

        @media all and (max-width: 800px) {
            .sub_b {
                height: 64px;
            }
        }
    </style>
    <div id="mail-subcribe-box">
        <div class="header-uni-emailbox">
            <div class="mail-sub-close">
                <button onclick="showsub();"><img src="/static/mail-sub-close.svg" alt="" srcset=""></button>

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

        echo (' <div id="mail-subcribe-box_success">
        <div class="header-uni-emailbox">
            <div class="mail-sub-close">
                <button onclick="showsub_s();"><img src="/static/mail-sub-close.svg" alt="" srcset=""></button>

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