<?php
function getHead($main_page, $add_path) {
    $title = getPageName($main_page);
    $add_path = "/zhansen";
    echo 
    "
    <meta charset='utf-8'>
    <title>展森事業有限公司 | $title</title>
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
    <link href='$add_path/assets/color/green.css' rel='stylesheet'>
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

?>