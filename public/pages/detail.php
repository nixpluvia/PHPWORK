<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/application/board/board_detail.php'; ?>

<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/public/resources/include/header.php'; ?>

<div id="con">


<?php 
    if($sqlId == false) { ?>
        <div>검색 결과가 없습니다.</div>
    <?php } else { ?>
    <ul class="board">

        <?php foreach ($articles as $art) { ?>
        <li>
            <a href="./detail.php?id=<?php echo $art['id'] ?>">
            <div><?php echo $art['id'] ?></div>
            <div><?php echo $art['title'] ?></div>
            <div><?php echo $art['body'] ?></div>
            <div><?php echo $art['banner_tit'] ?></div>
            <div><?php echo $art['banner_body'] ?></div>
            <div><?php echo $art['regDate'] ?></div>
            </a>
        </li>
        <?php } ?> 
    </ul>
    <?php } ?>

    

</div>

<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/public/resources/include/footer.php'; ?>