<?php
if (isset($_GET['ID'])) {
        include 'view:article.php';
    
} 
elseif (isset($_GET['CAT'])) {
        include 'c.php'; 
} 
else {
    include 'index_view.php';
}
?>
<?php include 'header.php'; ?>
