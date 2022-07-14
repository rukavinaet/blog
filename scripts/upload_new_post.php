<?php
$dbServerName = "localhost:3306";
$dbUser = "masteruser";
$dbPass = "Sunce888##";
$dbName = "master";
$conn = mysqli_connect($dbServerName, $dbUser, $dbPass, $dbName);
date_default_timezone_set("Europe/Zagreb");
session_start();

if (isset($_POST['PostBlog'])) {
    if($conn === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    $mdf = md5(date("Y-m-d h:i:sa")).'-';
    $targetfolder = "../uploads/" . $mdf;
    $targetfolder = $targetfolder . basename($_FILES['imagefile']['name']);
    if (move_uploaded_file($_FILES['imagefile']['tmp_name'], $targetfolder)) {
        $filename = basename($_FILES['imagefile']['name']);
        $ImageFile = $mdf . $filename;
    } else {
        echo "An error occured!";
    }
    $title = $_POST['ArticleName'];
    $id = $_POST['ArticleID'];
    $text = $_POST['ArticleText'];
    $meta = $_POST['ArticleDescription'];
    $company = $_POST['ImageCompany'];
    $person = $_POST['ImagePerson'];
    $key = $_POST['key'];
    $day = date('Y-m-d');
    $category = $_POST['BlogCategory'];

 
    $query = "INSERT INTO `blog_article` (`AID`, `ATitle`, `ADate`, `AImage`, `AImageSourceCompany`, `AImageSourcePerson`, `AHTML`, `APublish`, `ACATID`, `ADescription`, `AKeywords`) 
    VALUES ('$id', '$title', '$day', '$ImageFile', '$company', '$person', '$text', '1', '$category', '$meta', '$key')";
    $query_run = mysqli_query($conn, $query);
    if($query_run){
        echo "Cool!";
        header("Location: /".$id);
    }
    else{
        echo $id . "<br>";
        echo $title. "<br>";
        echo $day. "<br>";
        echo $ImageFile. "<br>";
        echo $company. "<br>";
        echo $person. "<br>";
        echo $text. "<br>";
        echo "1 <br>";
        echo $category. "<br>";
        echo $meta. "<br>";
        echo $key. "<br>" ;
    }
   
}