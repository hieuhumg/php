<?php
    $vitri = 1;
    $quangcao = commercial($db, $vitri);
    while($row = mysqli_fetch_array($quangcao)){
?>

<img width="280" src="./upload/quangcao/<?php echo $row['urlHinh']; ?>" />
<div style="height:10px"></div>
<?php
    }
?>