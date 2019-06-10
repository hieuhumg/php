<?php
    require "dbCon.php";
    $db = connectDb();


    function TinMoiNhat_MotTin($db) {
        $qr = "SELECT * FROM tin ORDER BY idTin DESC LIMIT 0,1";
        $result = $db->query($qr);
        return  $result;
    }

    function BonTinMoiNhat($db) {
        $qr = "SELECT * FROM tin ORDER BY idTin DESC LIMIT 1,6";
        $result = $db->query($qr);
        return  $result;
    }
    function mostView ($db) {
        $qr = "SELECT * FROM tin ORDER BY SoLanXem DESC LIMIT 0,4";
        $result = $db->query($qr);
        return $result;
    }

    //quảng cáo
    function commercial ($db,$vitri) {
        $qr ="SELECT * FROM quangcao WHERE vitri=$vitri ";
        $result = $db->query($qr);
        return $result;
    }
    function theLoai ($db) {
        $qr = "SELECT * FROM theloai";
        $result = $db->query($qr);
        return $result;
    }

    function loaiTin ($db, $idTL) {
        $qr = "SELECT * FROM loaitin WHERE idTL = $idTL";
        $result = $db->query($qr);
        return $result;
    }

    function tinMoiNhat($db, $idTL) {
        $qr = "SELECT * FROM tin WHERE idTL =$idTL ORDER BY idTin DESC LIMIT 0,1";
        $result = $db->query($qr);
        return $result;
    }
    function tinMoiNhi($db, $idTL) {
        $qr = "SELECT * FROM tin WHERE idTL =$idTL ORDER BY idTin DESC LIMIT 1,2";
        $result = $db->query($qr);
        return $result;
    }

    //tin trong loai

    function tinTrongLoai($db, $idLT) {
        $qr = "SELECT * FROM tin WHERE idLT =$idLT ORDER BY idTin DESC";
        $result = $db->query($qr);
        return $result;
    }

    //phân trang 
    function phanTrang($db, $idTL, $form, $sotintrongtrang) {
        $qr = "SELECT * FROM tin WHERE idTL =$idTL ORDER BY idTin DESC LIMIT $form,$sotintrongtrang";
        $result = $db->query($qr);
        return $result;
    }

    //form đăng ký
    

?>