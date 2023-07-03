<?php
function getHead($main_page, $add_path) {
    $title = getPageName($main_page);
    // $add_path = "/.";
    echo 
    "
    <meta charset='utf-8'>
    <title>格安企業有限公司 | $title</title>
    <meta keyword='keywords' content='舞台, 植栽, 園藝, 花海工程, 防汛搶災, 病蟲害防治, 造景, 美化工程, 水土保持, 喬木, 灌木, 養護, 樹木修剪, 環境綠化, 防風林, 格安, 
    格安企業, 格安企業有限公司, 舞台搭建, 人力派遣, koan, 綠美化, 專業團隊, 專業, 演唱會, 搭舞台, 除草, 景觀, 景觀工程, 草木移植, 草花移植, 草皮養護, 草坪養護, 草皮修剪, 公園綠地, 公園養護, 公園清潔, 工作機會, 專業人才, 園藝人才'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta name='description' content=''>
    <meta name='author' content=''>
    <!-- styles -->
    <link href='$add_path/assets/css/bootstrap.css' rel='stylesheet'>
    <link href='$add_path/assets/css/bootstrap-responsive.css' rel='stylesheet'>
    <link href='$add_path/assets/css/prettyPhoto.css' rel='stylesheet'>
    <link href='$add_path/assets/js/google-code-prettify/prettify.css' rel='stylesheet'>
    <link href='$add_path/assets/css/flexslider.css' rel='stylesheet'>
    <link href='$add_path/assets/css/style.css' rel='stylesheet'>
    <link href='$add_path/assets/color/blue.css' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,600,400italic|Open+Sans:400,600,700' rel='stylesheet'>

    <!-- fav and touch icons -->
    <link rel='shortcut icon' href='$add_path/assets/ico/zhansen-favicon.ico'>
    <link rel='apple-touch-icon-precomposed' sizes='144x144' href='$add_path/assets/ico/zhansen-144.png'>
    <link rel='apple-touch-icon-precomposed' sizes='114x114' href='$add_path/assets/ico/zhansen-114.png'>
    <link rel='apple-touch-icon-precomposed' sizes='72x72' href='$add_path/assets/ico/zhansen-72.png'>
    <link rel='apple-touch-icon-precomposed' href='$add_path/assets/ico/zhansen-57.png'>

    <!-- =======================================================
    Theme Name: Lumia
    Theme URL: https://bootstrapmade.com/lumia-bootstrap-business-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
    ======================================================= -->
    ";
}
