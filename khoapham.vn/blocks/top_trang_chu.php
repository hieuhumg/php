
<div id="slide-left">
          <?php
            $tinmoinhat = TinMoiNhat_MotTin($db);
            $row = mysqli_fetch_array($tinmoinhat);

          ?>
        	<div id="slideleft-main">
                <img src="upload/tintuc/<?php echo $row['urlHinh'];  ?>"  /><br />
                <h2 class="title"><a href="index.php?p=chitiettin&idTin=<?php echo $row['idTin']; ?>"><?php echo $row['TieuDe'];  ?></a> </h2>
                <div class="des">
                    <?php echo $row['TomTat']; ?>
                </div>
            	<p class="tlq"><a href="#">Hàng trăm chuyến bay bị hủy vì Trung Quốc tập trận</a></p>
                
        	</div>
            <div id="slideleft-scroll">
            	
              <div class="content_scoller width_common">
            <ul>
              <?php
                $bontinmoinhat = BonTinMoiNhat($db);
                while( $row_bontinmoi = mysqli_fetch_array($bontinmoinhat)){
              ?>
               <li>
                <div class="title_news">
               		<a href="index.php?p=chitiettin&id=<?php echo $row_bontinmoi['idTin']; ?>" class="txt_link"><?php echo $row_bontinmoi['TieuDe']; ?></a> 
                </div>
              </li>
               <?php
                }
               ?>
 
            </ul>
            </div>			
            
			<div id="gocnhin">
                <img alt="" src="http://khoapham.vn/images/logoKhoaPham.png" width="100%"></a>
                <div class="title_news"></div>
            </div>
                
            </div>
</div>


     