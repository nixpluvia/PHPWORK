<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP WORK</title>

    <link rel="stylesheet" href="resources/css/common.css"></link>
    <link rel="stylesheet" href="resources/css/layout.css"></link>
    <link rel="stylesheet" href="resources/css/custom.css"></link>

    <script src="resources/js/jquery-3.6.0.min.js"></script>
    <script src="resources/js/custom.js"></script>
</head>
<body>
    <?php include_once __DIR__ . '/resources/include/config.php'; ?>
    <h1>HELLO WORLD</h1>

    <?php
        $sqlArticle = "SELECT `article`.*, `banner`.title AS banner_tit, `banner`.`body` AS banner_body FROM `article` LEFT JOIN `banner` ON `article`.id = `banner`.articleNum ORDER BY `article`.id DESC;";

        $sqlRs = mysqli_query($dbConn, $sqlArticle);

        $articles = [];
        
        while ($article = mysqli_fetch_assoc($sqlRs)) {
            $articles[] = $article;
        }
    ?>
    <ul>
        <?php foreach ($articles as $art) {?>
        <li>
            <div><?php echo $art['id'] ?></div>
            <div><?php echo $art['title'] ?></div>
            <div><?php echo $art['body'] ?></div>
            <div><?php echo $art['banner_tit'] ?></div>
            <div><?php echo $art['banner_body'] ?></div>
            <div><?php echo $art['regDate'] ?></div>
        </li>
        <?php } ?>
    </ul>
</body>
</html>