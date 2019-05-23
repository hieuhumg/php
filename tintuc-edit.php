<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    
    
</head>

<body>
    <?php
        $someJSON = '{
            "hot": {
                "link": "\/m-u-phai-hoan-lai-thuong-vu-daniel-james-vi-ly-do-bat-kha-khang-2511701905.html",
                "title": "Cha c\u1ee7a Daniel James \u0111\u1ed9t ng\u1ed9t qua \u0111\u1eddi, th\u01b0\u01a1ng v\u1ee5 sang M.U t\u1ea1m ho\u00e3n",
                "img": "http:\/\/img.f51.bdpcdn.net\/Assets\/Media\/2019\/05\/23\/41\/james.jpg",
                "desc": "Th\u01b0\u01a1ng vu\u0323 chuy\u00ea\u0309n nh\u01b0\u01a1\u0323ng ti\u00ea\u0300n v\u00ea\u0323 Daniel James t\u01b0\u0300 Swansea sang Man United se\u0303 pha\u0309i hoa\u0303n la\u0323i vi\u0300 cha \u0111e\u0309 cu\u0309a c\u00e2\u0300u thu\u0309 na\u0300y m\u01a1\u0301i qua \u0111\u01a1\u0300i."
            },
            "normal": [
                {
                    "link": "\/de-gea-mo-toang-canh-cua-roi-man-united-2511471905.html",
                    "title": "De Gea m\u1edf toang c\u00e1nh c\u1eeda r\u1eddi Man United",
                    "desc": " Theo t\u1edd Daily Mail, David de Gea v\u1eeba ch\u00ednh th\u1ee9c t\u1eeb ch\u1ed1i l\u1eddi m\u1eddi gia h\u1ea1n h\u1ee3p \u0111\u1ed3ng c\u1ee7a Man United. Ph\u00eda Qu\u1ef7 \u0111\u1ecf c\u0169ng kh\u1eb3ng \u0111\u1ecbnh \u0111\u00e2y l\u00e0 l\u1ea7n cu\u1ed1i c\u00f9ng h\u1ecd g\u1eedi t\u1edbi th\u1ee7 th\u00e0nh n\u00e0y h\u1ea3o \u00fd gia h\u1ea1n. V\u1eady l\u00e0 m\u1ed1i l\u01b0\u01a1ng duy\u00ean gi\u1eefa De Gea v\u00e0 Man United \u0111\u00e3 t\u1edbi h\u1ed3i k\u1ebft. "
                },
                {
                    "link": "\/icardi-sap-noi-loi-tu-gia-inter-2511411905.html",
                    "title": "Icardi s\u1eafp n\u00f3i l\u1eddi t\u1eeb gi\u00e3 Inter",
                    "desc": " T\u01b0\u01a1ng lai v\u00f4 \u0111\u1ecbnh \u0111ang ch\u1edd \u0111\u1ee3i Mauro Icardi. Ti\u1ec1n \u0111\u1ea1o 26 tu\u1ed5i \u0111\u00e3 \u0111\u00e1nh m\u1ea5t v\u1ecb th\u1ebf \u1edf c\u1ea3 Inter l\u1eabn \u0110T Argentina. M\u1edbi nh\u1ea5t, Icardi v\u1eeba b\u1ecb HLV Lionel Scaloni g\u1ea1ch t\u00ean kh\u1ecfi danh s\u00e1ch \u0110T Argentina tham d\u1ef1 Copa America 2019. C\u00f2n trong m\u00e0u \u00e1o Nerazzurri, Icardi s\u1ebd b\u1ecb thanh l\u00fd nh\u01b0 m\u00f3n h\u00e0ng qu\u00e1 \u0111\u00e1t. "
                },
                {
                    "link": "\/cuu-sao-liverpool-sap-lam-dong-doi-cua-fellaini-o-trung-quoc-2511581905.html",
                    "title": "\u0027Bom x\u1ecbt\u0027 c\u1ee7a Liverpool s\u1eafp l\u00e0m \u0111\u1ed3ng \u0111\u1ed9i v\u1edbi Fellaini \u1edf Trung Qu\u1ed1c",
                    "desc": " Ti\u1ec1n \u0111\u1ea1o Christian Benteke s\u1eafp s\u1eeda r\u1eddi Crystal Palace \u0111\u1ec3 gia nh\u1eadp CLB Shandong Luneng Taishan (Trung Qu\u1ed1c) v\u1edbi gi\u00e1 15 tri\u1ec7u b\u1ea3ng. "
                },
                {
                    "link": "\/barca-mat-kiem-soat-vu-de-ligt-vi-cac-doi-thu-premier-league-2511441905.html",
                    "title": "Barca m\u1ea5t ki\u1ec3m so\u00e1t v\u1ee5 De Ligt v\u00ec c\u00e1c \u0111\u1ed1i th\u1ee7 Premier League",
                    "desc": " Theo c\u00e1c t\u1edd b\u00e1o \u1edf T\u00e2y Ban Nha, Barca \u0111\u00e3 kh\u00f4ng c\u00f2n n\u1eafm th\u1ebf ch\u1ee7 \u0111\u1ed9ng trong th\u01b0\u01a1ng v\u1ee5 Matthijs De Ligt b\u1edfi c\u00e1c \u00f4ng l\u1edbn \u1edf Premier League s\u1eb5n s\u00e0ng chi \u0111\u1eadm \u0111\u1ec3 c\u01b0\u1edbp anh. "
                },
                {
                    "link": "\/man-united-bat-ngo-hoi-muon-kevin-strootman-2511321905.html",
                    "title": "Man United b\u1ea5t ng\u1edd h\u1ecfi m\u01b0\u1ee3n Kevin Strootman",
                    "desc": " Qu\u1ef7 \u0111\u1ecf th\u00e0nh Manchester \u0111\u01b0\u1ee3c cho l\u00e0 \u0111\u00e3 \u0111\u01b0a ra l\u1eddi \u0111\u1ec1 ngh\u1ecb v\u1edbi ti\u1ec1n v\u1ec7 Kevin Strootman c\u1ee7a Marseille theo d\u1ea1ng cho m\u01b0\u1ee3n. "
                },
                {
                    "link": "\/barca-chi-40-trieu-euro-de-mua-maxi-2511301905.html",
                    "title": "Barca chi 40 tri\u1ec7u euro \u0111\u1ec3 mua Maxi",
                    "desc": " Barcelona \u0111\u00e3 nh\u1eafm t\u1edbi ng\u00f4i sao tr\u1ebb Maxi Gomez c\u1ee7a Celta Vigo nh\u01b0 m\u1ee5c ti\u00eau h\u00e0ng \u0111\u1ea7u \u0111\u1ec3 k\u1ebf t\u1ee5c Luis Suarez trong t\u01b0\u01a1ng lai g\u1ea7n. Ch\u00e2n s\u00fat 22 tu\u1ed5i n\u00e0y c\u00f3 nh\u1eefng b\u01b0\u1edbc ti\u1ebfn \u1ed5n \u0111\u1ecbnh trong th\u1eddi gian qua. Anh ghi 17 b\u00e0n \u1edf m\u00f9a tr\u01b0\u1edbc v\u00e0 v\u1eabn c\u00f3 13 b\u00e0n \u1edf m\u00f9a n\u00e0y, b\u1ea5t k\u1ec3 Celta v\u1eeba tr\u1ea3i qua m\u1ed9t m\u00f9a b\u00f3ng r\u1ea5t kh\u00f3 kh\u0103n. "
                },
                {
                    "link": "\/dortmund-chieu-mo-thanh-cong-hazard-em-va-brandt-2511031905.html",
                    "title": "Dortmund chi\u00eau m\u1ed9 th\u00e0nh c\u00f4ng Hazard em v\u00e0 Brandt",
                    "desc": " Borussia Dortmund \u0111\u00e3 ho\u00e0n t\u1ea5t vi\u1ec7c chi\u00eau m\u1ed9 Thorgan Hazard t\u1eeb Monchengladbach v\u00e0 Julian Brandt t\u1eeb Bayer Leverkusen. \u0110\u00e2y l\u00e0 t\u00e2n binh th\u1ee9 ba v\u00e0 th\u1ee9 t\u01b0 c\u1ee7a \u0111\u1ed9i ch\u1ee7 s\u00e2n Signal Iduna Park trong m\u00f9a H\u00e8 n\u00e0y. "
                },
                {
                    "link": "\/chuyen-nhuong-22-5-man-city-ra-gia-100-trieu-euro-cho-sane-2510931905.html",
                    "title": "Chuy\u1ec3n nh\u01b0\u1ee3ng 22\/5: Man City ra gi\u00e1 100 tri\u1ec7u euro cho Sane",
                    "desc": " Man City ra gi\u00e1 cho Sane; De Gea c\u01b0\u01a1ng quy\u1ebft t\u1eeb ch\u1ed1i gia h\u1ea1n v\u1edbi M.U; Varane \u1edf l\u1ea1i Real... l\u00e0 nh\u1eefng tin chuy\u1ec3n nh\u01b0\u1ee3ng \u0111\u00e1ng ch\u00fa \u00fd nh\u1ea5t 24h qua. "
                },
                {
                    "link": "\/ilicic-va-quagliarella-tren-duong-toi-napoli-2510551905.html",
                    "title": "Ilicic v\u00e0 Quagliarella tr\u00ean \u0111\u01b0\u1eddng t\u1edbi Napoli",
                    "desc": " Theo th\u00f4ng tin t\u1eeb b\u00e1o ch\u00ed Italia th\u00ec Napoli s\u1eafp chi\u00eau m\u1ed9 th\u00e0nh c\u00f4ng 2 ng\u00f4i sao t\u1ea5n c\u00f4ng l\u00e0 Ilicic v\u00e0 Quagliarella. \u0110\u00e2y \u0111\u01b0\u1ee3c coi s\u1ebd l\u00e0 nh\u1eefng m\u00f3n qu\u00e0 \u0111\u1ea7u ti\u00ean c\u1ee7a ch\u1ee7 t\u1ecbch De Laurentiis d\u00e0nh cho Napoli trong m\u00f9a gi\u1ea3i m\u1edbi. Ilicic v\u00e0 Quagliarella \u0111\u1ec1u \u0111ang ch\u01a1i c\u1ef1c hay trong m\u00f9a b\u00f3ng 2018\/19. "
                },
                {
                    "link": "\/m-u-dat-thoa-thuan-chieu-mo-tai-nang-tre-nguoi-xu-wales-2510541905.html",
                    "title": "M.U \u0111\u1ea1t th\u1ecfa thu\u1eadn chi\u00eau m\u1ed9 t\u00e0i n\u0103ng tr\u1ebb ng\u01b0\u1eddi X\u1ee9 Wales",
                    "desc": " Sau m\u1ed9t m\u00f9a gi\u1ea3i b\u1ebft b\u00e1t, Man United chu\u1ea9n b\u1ecb \u0111\u00f3n t\u00e2n binh \u0111\u1ea7u ti\u00ean khi chi ra 15 tri\u1ec7u b\u1ea3ng \u0111\u1ec3 mang v\u1ec1 c\u1ea7u th\u1ee7 ch\u1ea1y c\u00e1nh Daniel James c\u1ee7a Swansea City. "
                },
                {
                    "link": "\/real-mua-xong-eriksen-cong-bo-sau-chung-ket-champions-league-2510521905.html",
                    "title": "Real mua xong Eriksen, c\u00f4ng b\u1ed1 sau chung k\u1ebft Champions League",
                    "desc": " B\u00e1o ch\u00ed T\u00e2y Ban Nha \u0111\u1ed3ng lo\u1ea1t \u0111\u0103ng t\u1ea3i th\u00f4ng tin Real Madrid \u0111\u00e3 ho\u00e0n t\u1ea5t b\u1ea3n h\u1ee3p \u0111\u1ed3ng mang t\u00ean Christian Eriksen t\u1eeb Tottenham v\u00e0 s\u1ebd c\u00f4ng b\u1ed1 r\u1ed9ng r\u00e3i sau chung k\u1ebft Champions League 2018\/19. "
                },
                {
                    "link": "\/du-the-nao-higuain-cung-se-ve-juve-2510461905.html",
                    "title": "D\u00f9 th\u1ebf n\u00e0o, Higuain c\u0169ng s\u1ebd v\u1ec1 Juve",
                    "desc": " B\u1ea5t k\u1ec3 Juventus c\u00f3 b\u1ed5 nhi\u1ec7m HLV Maurizio Sarri hay kh\u00f4ng, ti\u1ec1n \u0111\u1ea1o Gonzalo Higuain g\u1ea7n nh\u01b0 ch\u1eafc ch\u1eafn s\u1ebd tr\u1edf l\u1ea1i Juve m\u00f9a t\u1edbi. Kh\u00f4ng ph\u1ea3i v\u00ec El Pipita y\u00eau m\u1ebfn m\u00e0u \u00e1o Juve hay L\u00e3o phu nh\u00e2n qu\u00e1 c\u1ea7n \u0111\u1ebfn t\u00e0i s\u0103n b\u00e0n c\u1ee7a anh, m\u00e0 b\u1edfi Juve v\u00e0 Higuain \u0111\u1ec1u kh\u00f4ng c\u00f2n l\u1ef1a ch\u1ecdn n\u00e0o kh\u00e1c kh\u1ea3 d\u0129. "
                }
            ]
        }';
        $someArray = json_decode($someJSON, true);
        $newHot = $someArray['hot'];
        $newNormal = $someArray['normal'];
    ?>

<!--  In tin hot  -->
    <?php foreach ($newHot as $value) { ?>
        <h1><?= $value['title'] ?></h1>
<!-- lap tin hot-->
    <?php } ?>

<!--    in tin normal-->
    <?php foreach ($newNormal as $value) { ?>
        <h1><?= $value['title'] ?></h1>
        <!-- lap tin normal-->
    <?php } ?>

    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>

</html>