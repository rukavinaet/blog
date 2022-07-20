<?php
require_once 'con.php';

if(isset($_GET['page']))
{
    $page = $_GET['page'];
}
else
{
    $page = 1;
}

$num_per_page = 02;
$start_from = ($page-1)*02;

$ID = mysqli_real_escape_string($conn, $_GET['CAT']);
$sql = "SELECT * FROM `blog_article` WHERE ACATID = '$ID' LIMIT $start_from,$num_per_page";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) == 0) {
    header("Location: /");
} else {
}

$sql2 = "SELECT * FROM `blog_category` WHERE categoryID = '$ID'";
$result2 = mysqli_query($conn, $sql2);
$row2 = mysqli_fetch_array($result2);




?>


<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title><?php echo ucfirst($row2['categoryID']); ?> | The RBlog</title> <!-- TODO: update page title -->
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
    <link rel="icon" href="/static/logo_128dp.png">
    <link rel="manifest" href="site.webmanifest"> <!-- TODO: update web app manifest file -->
    <meta name="theme-color" content="#FF00FF"> <!-- TODO: update meta theme color -->
    <link rel="stylesheet" href="/styles/css/styles.css"> <!-- TODO: Update styles -->
    <link rel="stylesheet" href="/styles/css/print.css" media="print">
   
</head>
<style>
    #<?php echo $row2['categoryID'] ?> {
        cursor: pointer;
        color: black;
        text-decoration-line: underline;
        text-decoration-color: red;
        text-decoration-thickness: 2px;
        text-underline-offset: 25px;
    }

    @media all and (max-width: 1285px) {
        #<?php echo $row2['categoryID'] ?> {
            text-underline-offset: 12px;
        }
    }
</style>
<?php include 'style.php' ?>

<body>
    <div class="article_body">
        <div class="cat-cont">
            <div class="cat-content">
                <p style="letter-spacing: 1.5px;">CATEGORY</p>
                <p class="cat-title"><?php echo $row2['categoryID']; ?></p>
                <p class="cat-subtitle"><?php echo $row2['CatDisplayText']; ?></p>
                <div onmouseover="invite();" onmouseout="deinvite();" class="latestincat" style="
                <?php 
                $showMe = $_GET['page'];
                if(! $showMe){echo "display:block;";}
                else{
                    if($showMe == "1"){echo "display:block;";}
                    else{
                        echo "display:none;";
                    }
                    
                }
                ?>">
                    <script>
                        var1 = "text-decoration-color";

                        function invite() {
                            document.getElementById("shrinkgrow").style.transform = "scale(1.02)";
                            document.getElementById("latest-meta-title").style.textDecoration = "underline red";

                        }

                        function deinvite() {
                            document.getElementById("latest-meta-title").style.textDecoration = "underline transparent";
                            document.getElementById("shrinkgrow").style.transform = "scale(1)";

                        }
                    </script>
                    <?php
                    $IDlatest = mysqli_real_escape_string($conn, $_GET['CAT']);
                    $sqllatest = "SELECT * FROM `blog_article` WHERE ACATID = '$IDlatest' ORDER BY `blog_article`.`ADate` DESC LIMIT 1";
                    $resultlatest = mysqli_query($conn, $sqllatest);
                    $rowlatest = mysqli_fetch_array($resultlatest)
                    ?>
                    <a href="/<?php echo $rowlatest['AID'] ?>">
                        <div class="image-grow" style="overflow:hidden;">
                            <img id="shrinkgrow" style="border-radius: 22px;" src="/uploads/<?php echo $rowlatest['AImage'] ?>" alt="">

                        </div>
                        <div class="latest-meta">
                            <p id="latest-meta-title"><?php echo $rowlatest['ATitle'] ?></p>
                            <p class="latest-meta-subtitle"><?php echo $rowlatest['ADescription'] ?></p>
                            <div class="arrow">
                                <img style="height: 25px;" src="/static/arrow.svg" alt="" srcset="">
                            </div>
                        </div>

                    </a>
                </div>
                <div class="other-articles">
                    <p style="font-size: 2em;
margin-block: 20px 50px;
                <?php 
                $showMe = $_GET['page'];
                if(! $showMe){echo "display:block;";}
                else{
                    if($showMe == "1"){echo "display:block;";}
                    else{
                        echo "opacity:0%;margin-block: 20px 20px;";
                    }
                    
                }
                ?>">All the Latest</p>
                </div>

                <div id="this-more-articles">


                    <?php
                    while ($row_this = mysqli_fetch_array($result)) {
                        include 'this_articles.php';
                    }
                    ?>
                       </div>
                       <div class="arti-buttons" style="display: flex;justify-content:center;">
                       <style>
                        .arti-buttons a{
                            margin-inline: 10px;
                        }
                        .danger{
                            background-color: blue;
                        }
                       </style>

                       <?php 
                                  

        
        $pr_query = "SELECT * from `blog_article` WHERE ACATID = '$ID'";
        $pr_result = mysqli_query($conn,$pr_query);
        $total_record = mysqli_num_rows($pr_result );
        
        $total_page = ceil($total_record/$num_per_page);

        if($page>1)
        {
            echo "<a href='?page=".($page-1)."' class='danger'>< Previous</a>";
            if($page>2){
                echo "<a href='?page=".($page-2)."' class='danger'>".($page-2) ."</a>";
    
            }
            echo "<a href='?page=".($page-1)."' class='danger'>".($page-1) ."</a>";
        }
        

        
        for($i=1;$i<$total_page;$i++)
        {
            //echo "<a href='?page=".$i."' class='btn btn-primary'>$i</a>";
        }

        
        if($i>$page)
        {
            
            echo "<p>". $page ."</p>";
            echo "<a href='?page=".($page+1)."' class='danger'>".($page+1) ."</a>";
            echo "<a href='?page=".($page+2)."' class='danger'>".($page+2) ."</a>";
            echo "<a href='?page=".($page+1)."' class='danger'>Next ></a>";
        }

?>

                       </div>
                     
            </div>
        </div>

    </div>




</body>

</html>