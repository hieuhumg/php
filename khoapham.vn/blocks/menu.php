<style>
.mainmenubtn {
    background-color: red;
    color: white;
    border: none;
    cursor: pointer;
    padding: 20px;
    margin-top: 20px;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-child {
    display: none;
    background-color: black;
    min-width: 200px;
}

.dropdown-child a {
    color: white;
    padding: 20px;
    text-decoration: none;
    display: block;
}

.dropdown:hover .dropdown-child {
    display: block;
}
</style>
</head>

<body>
        <?php
            $theloaitin = theLoai($db);
            while($row_theloai = mysqli_fetch_array($theloaitin)){
                $idTL = $row_theloai['idTL'];
        ?>
    <div class="dropdown">
        <button class="mainmenubtn"><?php echo $row_theloai['TenTL']; ?></button>
        <?php
            $loaitin = loaiTin($db, $idTL);
            while($row_loaitin = mysqli_fetch_array($loaitin)){

        ?>
        <div class="dropdown-child">
            <a href="index.php?p=tintrongloai&id=<?php echo $row_loaitin['idLT'] ; ?>"><?php echo $row_loaitin['Ten']; ?></a>
        </div>
        <?php
            }
        ?>
    </div>
    <?php
   }
    ?>

</body>

</html>