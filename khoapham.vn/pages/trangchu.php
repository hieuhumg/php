<?php
$theloai = theLoai($db);
while ($row_theloai = mysqli_fetch_array($theloai)) {
    $idTL = $row_theloai['idTL'];
    ?>
<div class="box-cat">
    <div class="cat">
        <div class="main-cat">

            <a href="#"><?php echo $row_theloai['TenTL']; ?></a>
        </div>

        <div class="child-cat">
            <?php
$loaitin = loaiTin($db, $idTL);
    while ($row_loaitin = mysqli_fetch_array($loaitin)) {
        ?>
            <a href="#"><?php echo $row_loaitin['Ten']; ?></a>
            <?php
}
    ?>
        </div>

        <div class="clear"></div>
        <div class="cat-content">
            <div class="col1">
                <?php
$tinmoinhat = tinMoiNhat($db, $idTL);
    $row_tinmoinhat = mysqli_fetch_array($tinmoinhat);
    ?>
                <div class="news">
                    <h3 class="title"><a href="#"><?php echo $row_tinmoinhat['TieuDe']; ?></a></h3>
                    <img class="images_news" src="upload/tintuc/<?php echo $row_tinmoinhat['urlHinh']; ?>"
                        align="left" />
                    <div class="des"><?php echo $row_tinmoinhat['TomTat']; ?></div>
                    <div class="clear"></div>

                </div>
            </div>
            <div class="col2">
                <?php
$tinmoinhi = tinMoiNhi($db, $idTL);
    while ($row_tinmoinhi = mysqli_fetch_array($tinmoinhi)) {
        ?>
                <p class="tlq"><a href="#"><?php echo $row_tinmoinhi['TieuDe']; ?></a>
                    </a></p>
                <?php
}
    ?>
            </div>
        </div>
    </div>
</div>
<div class="clear"></div>
<?php
}
?>

<!-- box cat-->