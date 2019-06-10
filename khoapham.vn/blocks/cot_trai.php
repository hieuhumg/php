<!-- <div class="box-cat">
    <div class="cat">
        <div class="main-cat">
            <a href="#">Tin xem nhiều</a>
        </div>

        <div class="clear"></div>
        <div class="cat-content">
        <?php
        $tinXemNhieu = mostView($db);
        while($row_mostView = mysqli_fetch_array($tinXemNhieu)) {
        
        ?>
            <div class="col1">
                <div class="news">
                    <img class="images_news"
                        src="upload/tintuc/<?php echo $row_mostView['urlHinh']; ?>" />
                    <h3 class="title"><a href="index.php?p=chitiettin&id=<?php echo $row_mostView['idTin']; ?>"><?php echo $row_mostView['TieuDe']; ?></a><span
                            class="hit"><?php echo $row_mostView['SoLanXem']; ?></span></h3>
                    <div class="clear"></div>
                </div>
            </div>
        <?php
        }
        ?>
        </div>
    </div>
</div>
<div class="clear"></div> -->