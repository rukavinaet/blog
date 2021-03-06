<head>
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
    *:focus {
    outline: none;
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
        line-height: 64px;
        letter-spacing: .04em;
    }

    .header-desktop-menu ul li a {
        color: #5f6368;
        cursor: pointer;
        text-decoration: none;
        height: 100%;
        display: block;
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

    .mail-search-button {
        display: flex;
    }

    .mail-search-button button {
        height: 50px;
        width: 126px;
        background-color: #ff0000c4;
        border: none;
        border-radius: 5px;
        color: white;
        font-size: 17px;
        cursor: pointer;
    }

    .mail-search-button button:hover {
        background-color: red;

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

    @media all and (max-width: 1485px) {
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
            justify-content: space-between;
        }

        #header-mobo-all-l {
            display: flex;
        }

        .header-mobo-all button {
            background-color: transparent;
            width: 55px;
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
            width: 300px;
            left: -300px;
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
            width: 45px;
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
            width: calc(100% - 300px);
            height: 100%;
            right: -100%;
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
            height: 80%;
        }

        .header-mobo-expand-menu ul {
            display: flex;
            justify-content: center;
            flex-direction: column;
            list-style: none;
        }
        .header-mobo-expand-menu ul li {
            display: flex;
            justify-content: flex-start;

        }
        .header-mobo-expand-menu ul li a{
            padding: 30px 40px;
            height: 20px;
            width: 100%;text-decoration: none;
color: #000000c9;
        }
    }
    /* Light mode */
@media (prefers-color-scheme: light) {
    .prefferdark {
        filter: invert(1);
    }
}


/* Dark mode */
@media (prefers-color-scheme: dark) {
    .prefferdark {
        filter: invert(0);
    }
}

</style>
<header>
    <div class="header-desktop">
        <div class="header-desktop-all">
            <div class="header-desktop-logo-menuflex">
                <div class="header-desktop-logo">
                    <a href="https://rukavinaet.blog" style="opacity: 70%;">
                        <h1>The
                    </a><a href="https://rukavinaet.blog"><span style="color: red;">RBlog</span></h1></a>
                </div>
                <div class="header-desktop-menu">
                    <ul>
                        <li><a id="index" href="/">Latest stories</a></li>
                        <?php 
                        require_once 'con.php';
                        $sql_menu = "SELECT * FROM `blog_category` ORDER BY `blog_category`.`OrderCat` ASC ";
                        $result_menu = mysqli_query($conn, $sql_menu);
                        while ($row_menu = mysqli_fetch_array($result_menu)) {
                            echo "<li><a style='text-transform:capitalize;' id='{$row_menu['categoryID']}' href='/category/{$row_menu['categoryID']}'>{$row_menu['categoryID']}</a></li>";
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <script>

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

            <div class="mail-search-button">
                <style>
                    #visi-search {
                        visibility: hidden;
                    }
                </style>
                <form id="visi-search" style="height: min-content;
        margin: auto;" action="search.php" method="post">
                            <input id="animateinput" placeholder="Search for an article" style="height: 35px;
        margin: auto;
        width: 0px;transition:.5s;
        border: 1px 0px 0px 0px antiquewhite;
        border: none;
        border-bottom-color: currentcolor;
        border-bottom-style: none;
        border-bottom-width: medium;
        border-bottom: 1px solid #5f636847;
        padding: 0px 5px;
        background-color: whitesmoke;
        border-radius: 5px;
        font-size: 18px;
        " type="text" name="SearchQ" id="">
                            <input style="display: none;" type="submit" value="Search">
                        </form>
                        <script>
                            function showsearch() {
                                if (document.getElementById("visi-search").style.visibility == "visible") {
                                    document.getElementById("visi-search").style.visibility = "hidden";
                                    document.getElementById("animateinput").style.width = "0px";

                                } else {
                                    document.getElementById("animateinput").style.width = "500px";
                                    document.getElementById("visi-search").style.visibility = "visible";
                                }
                            }
                        </script>
                        <button onclick="showsearch();" style="background-color: transparent;width: 60px;"><img style="height: 25px;opacity: 60%;" src="/static/search.svg" alt=""></button>
                        <button onclick="showsub();">Subscribe</button>
                    </div>
                </div>
                   
                </div>
    </div>
    <div class="header-mobile">
        <script>
            function togglemenu() {
                if (document.getElementById("header-mobo-expand").style.left == "0px") {
                    document.getElementById("header-mobo-expand").style.left = "-300px"
                    document.getElementById("shadow-from-mobo-header").style.right = "-100%"
                } else {
                    document.getElementById("shadow-from-mobo-header").style.right = "0%"
                    document.getElementById("header-mobo-expand").style.left = "0px";
                }
            }

            function showsearch_mobo() {
                if (document.getElementById("header-mobo-all-l").style.display == "none") {
                    document.getElementById("header-mobo-all-l").style.display = "flex"
                    document.getElementById("header-mobo-search").style.display = "none"
                    document.getElementById("changeimgmobo").style.opacity = "20%"
                    document.getElementById("changeimgmobo").src = "/static/search.svg"
                } else {
                    document.getElementById("header-mobo-all-l").style.display = "none"
                    document.getElementById("changeimgmobo").src = "/static/mail-sub-close.svg"
                    document.getElementById("header-mobo-search").style.display = "flex"
                    document.getElementById("changeimgmobo").style.opacity = "100%"
                }




            }
        </script>
        <div class="header-mobo-all">
            <div id="header-mobo-all-l">
                <button onclick="togglemenu();"><img class="prefferdark" src="/static/menu_open.svg" alt=""></button>

                <a href="https://rukavinaet.blog" style="color:black;text-decoration:none;font-size:9px;">
                    <h1>
                        <span>The</span> <span style="color: red;">RBlog</span>
                    </h1>
                </a>

            </div>

            <div id="header-mobo-search" style="display: none;justify-content: end;">
                <form action="search.php" method="POST" style="display: flex;">
                    <input autofocus placeholder="Search for an article" type="text" style="width:90%;font-size:18px;margin: auto;height: 30px;border: none;">
                    <input type="submit" value="" hidden>
                </form>
            </div>
            <button onclick="showsearch_mobo();"><img class="prefferdark" id="changeimgmobo" style="opacity:20%;" src="/static/search.svg" alt=""></button>
        </div>
        <div id="header-mobo-expand">
            <div class="header-mobo-expand-upper">
                <button onclick="togglemenu();"><img class="prefferdark" src="/static/mail-sub-close.svg" alt=""></button>
                <a href="https://rukavinaet.blog" style="color:black;text-decoration:none;font-size:9px;">
                    <h1>
                        <span>The</span> <span style="color: red;">RBlog</span>
                    </h1>
                </a>
            </div>
            <div class="header-mobo-expand-menu">
                <ul>
                    <li><a id="index" href="/">Latest stories</a></li>
                    <?php 
                        require_once 'con.php';
                        $sql_menu = "SELECT * FROM `blog_category` ORDER BY `blog_category`.`OrderCat` ASC ";
                        $result_menu = mysqli_query($conn, $sql_menu);
                        while ($row_menu = mysqli_fetch_array($result_menu)) {
                            echo "<li><a style='text-transform:capitalize;' id='{$row_menu['categoryID']}'href='/category/{$row_menu['categoryID']}'>{$row_menu['categoryID']} </a></li>";
                        }
                        ?>
                </ul>
            </div>
            <div class="mail-search-button" style="display: flex;">
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
            <button onclick="showsub();"><img class="prefferdark" src="/static/mail-sub-close.svg" alt="" srcset=""></button>

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
                <button onclick="showsub_s();"><img class="prefferdark" src="/static/mail-sub-close.svg" alt="" srcset=""></button>

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