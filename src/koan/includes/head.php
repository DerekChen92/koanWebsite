<?php
    function getHead($main_page, $add_path) {
        $page_name = getPageName($main_page);
        $add_path = "/koan";
        echo "
        <title>格安企業有限公司 | $page_name
        </title>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no'>
        <link href='$add_path/assets/css/styles/layout.css' rel='stylesheet' type='text/css' media='all'>
        ";
    }
?>