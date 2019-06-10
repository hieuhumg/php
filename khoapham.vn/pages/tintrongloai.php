<?php
    $idLT = $_GET['id'];
    echo$idLT;
?>
<?php
    $page = $_GET['page'];
?>
<?php
    $sotintrongtrang = 4;
    $form = ($page -1) * $sotintrongtrang;
    $phantrang = phanTrang($db, $idTL, $form, $sotintrongtrang);
    while($row_phantrang = mysqli_fetch_array($phantrang)){
?>
<div class="box-cat">
	<div class="cat1">
    	
        <div class="clear"></div>
        <div class="cat-content">
        	<div class="col0 col1">
            	<div class="news">
                    <h3 class="title" ><a href="#"><?php echo $row_phantrang['TieuDe']; ?></a></h3>
                    <img class="images_news" src="upload/tintuc/<?php echo $row_phantrang['urlHinh']; ?>" align="left" />
                    <div class="des"><?php echo $row_phantrang['TomTat']; ?></div>
                    <div class="clear"></div>
                   
				</div>
            </div>
            
        </div>
    </div>
</div>
<?php
    }
?>
<!-- box cat-->