<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/init/init.php'; ?>

<?php
    $sqlId = $_GET['id'];
    
    $sqlArticle = "SELECT `article`.*, `banner`.title AS banner_tit, `banner`.`body` AS banner_body FROM `article` LEFT JOIN `banner` ON `article`.id = `banner`.articleNum WHERE `article`.id = " . $sqlId;

    $sqlRs = mysqli_query($dbConn, $sqlArticle);

    // query record array
    if($sqlRs !== false){
        $articles = [];
        while ($article = mysqli_fetch_assoc($sqlRs)) {
        $articles[] = $article;
        }
    }

?>