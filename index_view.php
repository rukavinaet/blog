<?php
include_once 'con.php';

$sql = "SELECT * FROM `blog_article`";
$result = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title><?php
            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while ($row = mysqli_fetch_array($result)) {
                    echo "id: " . $row["AID"];
                }
            } else {
                echo "0 results";
            } ?></title> <!-- TODO: update page title -->
    <script type="module">
        document.documentElement.classList.remove('no-js');
        document.documentElement.classList.add('js');
    </script>
    <meta name="description" content="Page Description"> <!-- TODO: update meta description -->
    <meta property="og:title" content="Home - Page"> <!-- TODO: update og:title -->
    <meta property="og:url" content="https://www.example.com/page"> <!-- TODO: update og:url -->
    <meta property="og:description" content="OG Page Description"> <!-- TODO: update og:description -->
    <meta property="og:image" content="/path/to/image"> <!-- TODO: og:image -->
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
    <link rel="stylesheet" href="/styles/css/styles.css"> <!-- TODO: Update styles -->
    <link rel="stylesheet" href="/styles/css/print.css" media="print">
</head>
<style>
    #index {
        cursor: pointer;
        color: black;
        text-decoration-line: underline;
        text-decoration-color: red;
        text-decoration-thickness: 2px;
        text-underline-offset: 25px;
    }

    @media all and (max-width: 1285px) {
        #index {
            text-underline-offset: 12px;
        }
    }
</style>
<body>
    <!-- Content -->
    <script src="js/app.js"></script> <!-- TODO: Update app entry point -->
    <script src="js/vendor/modernizr-{{MODERNIZR_VERSION}}.min.js"></script> <!-- TODO: Add Modernizr js -->
    <script src="/assets/js/xy-polyfill.js" nomodule></script>
    <script src="/assets/js/script.js" type="module"></script>

</body>

</html>