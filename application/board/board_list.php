<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/init/init.php'; ?>

<?php
    
    if (isset($_POST['srchTxt']) == false) {
        $sqlSel = "";
    } else {
        $sqlSel = "WHERE `article`.`body` LIKE '%" . $_POST['srchTxt'] . "%'";
    }
    
    $sqlArticle = "SELECT `article`.*, `banner`.title AS banner_tit, `banner`.`body` AS banner_body FROM `article` LEFT JOIN `banner` ON `article`.id = `banner`.articleNum " . $sqlSel . "ORDER BY `article`.id DESC;";

    $sqlRs = mysqli_query($dbConn, $sqlArticle);

    // query num check
    $sqlLength =  mysqli_num_rows($sqlRs);

    // query record array
    if($sqlRs !== false || $sqlLength > 0){
        $articles = [];
        while ($article = mysqli_fetch_assoc($sqlRs)) {
        $articles[] = $article;
        }
    }

?>