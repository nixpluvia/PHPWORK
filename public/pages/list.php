<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/application/board/board_list.php'; ?>

<!-- Header -->
<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/public/resources/include/header.php' ?>

<div id="con">
    

    <div class="search">
        <form action="/public/pages/list.php" method="POST" name="test" onsubmit="test22(this); return false;">
            <fieldset>
                <input type="text" name="srchTxt">
                <button>검색</button>
            </fieldset>
        </form>
    </div>
    
    <h2>Board_list</h2>


    <?php 
    if($sqlRs == false || $sqlLength <= 0) { ?>
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

<!-- Footer -->
<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/public/resources/include/footer.php' ?>